<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Request\Siswa\CreateRequest;
use App\Http\Service\Income\IIncomeService;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService,public IIncomeService $iIncomeService)
    {
    }

    public function action(CreateRequest $request)
    {
        DB::beginTransaction();
        try{
            $year = $this->iSiswaService->GetOneYear(id: $request->year_id);
        if (!$year) {
            return Response::error(message: "Year not found", statusCode: 404);
        }

        $month = $this->iSiswaService->GetAllMonth();
        if (!$month) {
            return Response::error(message: "Month not found", statusCode: 404);
        }

        $harga = $this->iSiswaService->GetHarga();
        if (!$harga) {
            return Response::error(message: "Harga not found", statusCode: 404);
        }
        
        $siswa = $this->iSiswaService->Create(
            year: $year,
            nisn: $request->nisn,
            password: $request->password,
            name: $request->nama,
            angkatan: $request->angkatan,
            year_id: $request->year_id
        );
        if($siswa){
            $startYearId = $siswa->year_id;
            $endYearId = $startYearId + 2;

            // Create income for 2 years
            foreach (range($startYearId, $endYearId) as $yearId){
                $currentYear = $this->iSiswaService->GetOneYear(id: $yearId);
                if(!$currentYear){
                    continue; // Skip if year not found
                }
                foreach($month as $m){
                    if($yearId == $startYearId && $m->id < 6){
                        continue; // Skip if month is less than 6 for the first year
                    }
                    if ($yearId == $endYearId && $m->id > 7){
                        break; // Break if month is more than 7 for the end year
                    }
                    $income = $this->iIncomeService->Create(
                        siswa_id: $siswa->id,
                        year_id: $currentYear->id,
                        amount: $harga->amoung,
                        month_id: $m->id,
                        name: $siswa->nama,
                        nisn: $siswa->nisn,
                        year: $currentYear->year,
                        month: $m->month
                    );
                    if(!$income){
                        DB::rollBack();
                        return Response::error(message: "Failed to create income", statusCode: 500);
                    }
                }
            }
            DB::commit();
            return Response::success(data: $siswa, message: "Siswa created successfully", statusCode: 201);
        }else {
        }
        }catch(\Exception $e){
            DB::rollBack();
            return Response::error(message: $e->getMessage(), statusCode: 500);
        }
    }
}
