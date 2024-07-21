<?php

namespace App\Http\Service\Income;

use App\Models\Siswa;
use App\Models\Year;
use App\Models\Harga;
use App\Models\Income;
use App\Models\Month;

class IncomeService implements IIncomeService
{
    /**
     * @param int $siswa_id
     * @param int $year_id
     * @param int $amount_id
     * @param int $month_id
     * @param string $name
     * @param string $nisn
     * @param string $year
     * @param string $month
     * 
     * @return [type]
     */
    public function Create(int $siswa_id, int $year_id, int $amount, int $month_id, string $name, string $nisn, string $year, string $month)
    {
        $data = new Income();
        $data->siswa_id = $siswa_id;
        $data->year_id = $year_id;
        $data->amount = $amount;
        $data->month_id = $month_id;
        $data->name = $name;
        $data->nisn = $nisn;
        $data->year = $year;
        $data->month = $month;
        $data->status = 'Belum Bayar';
        $save = $data->save();
        if ($save) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOne(int $id)
    {
        $data = Income::where('id', $id)->first();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param int $siswa_id
     * @param string|null $year
     * 
     * @return [type]
     */
    public function GetBySiswa(int $siswa_id, ?string $year)
    {
        $data = Income::where('siswa_id', $siswa_id)->get();

        if($year){
            $data = Income::where('siswa_id', $siswa_id)->where('year', $year)->get();
        }

        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param int $siswa_id
     * @return array|null
     */
    public function GetYears (int $siswa_id) {
        $data = Income::where('siswa_id', $siswa_id)->orderBy('year')->pluck('year')->flatten()->unique()->toArray();

        if ($data) {
            return $data;
        } else {
            return null;
        }
    }


    /**
     * @param int $page
     * @param int $limit
     * @param string|null $search
     * 
     * @return [type]
     */
    public function List(int $page = 1, int $limit = 10, ?string $search = null)
    {
        $query = Income::query();

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%");
                $q->orWhere('nisn', 'like', "%$search%");
            });
        }

        if ($page == 0) {
            $data = $query->get();
            return $data;
        } else {
            $data = $query->paginate($limit, ['*'], 'page', $page);
            return $data;
        }
    }

    /**
     * @return [type]
     */
    public function TotalIncome()
    {
        $data = Income::where('status', 'Sudah Bayar')->orWhere('status','Telat Bayar')->sum('amount');
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }
}