<?php

namespace App\Http\Service\Siswa;

use App\Models\Harga;
use App\Models\Income;
use App\Models\Month;
use App\Models\Siswa;
use App\Models\Transaction as ModelsTransaction;
use App\Models\Year;
use ZerosDev\TriPay\Client;
use ZerosDev\TriPay\Support\Constant;
use ZerosDev\TriPay\Support\Helper;
use ZerosDev\TriPay\Transaction;

class SiswaService implements ISiswaService
{
    /**
     * @param int $page
     * @param int $limit
     * @param string|null $search
     * 
     * @return [type]
     */
    public function List(int $page = 1, int $limit = 10, ?string $search = null)
    {
        $query = Siswa::query();

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%");
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
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOne(int $id)
    {
        $data = Siswa::where('id', $id)->first();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param Year $year
     * @param string $nisn
     * @param string $password
     * @param string $name
     * @param string $angkatan
     * @param int $year_id
     * 
     * @return [type]
     */
    public function Create(Year $year, string $nisn, string $password, string $name, string $angkatan, int $year_id)
    {
        $siswa = new Siswa();
        $siswa->year_id = $year->id;
        $siswa->nisn = $nisn;
        $siswa->password = $password;
        $siswa->nama = $name;
        $siswa->angkatan = $angkatan;
        $siswa->tahun_masuk = $year->year;
        $save = $siswa->save();
        if ($save) {
            return $siswa;
        } else {
            return null;
        }
    }

    /**
     * @param int $id
     * @param string $nisn
     * @param string $password
     * @param string $name
     * @param string $angkatan
     * @param int $year_id
     * 
     * @return [type]
     */
    public function Update(int $id, string $nisn, string $password, string $name, string $angkatan, int $year_id)
    {
        $siswa = Siswa::where('id', $id)->first();
        if ($siswa) {
            $siswa->nisn = $nisn;
            $siswa->password = $password;
            $siswa->nama = $name;
            $siswa->angkatan = $angkatan;
            $siswa->year_id = $year_id;
            $save = $siswa->save();
            if ($save) {
                return $siswa;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function Delete(int $id)
    {
        $siswa = Siswa::where('id', $id)->first();
        if ($siswa) {
            $delete = $siswa->delete();
            if ($delete) {
                return $siswa;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function Payment(int $id)
    {
        $income = Income::where('id', $id)->first();
        $date = date('Y-m');
        $jadwal = $income->year . '-' . $income->month . '-10';
        if ($income) {
            $income->status = ($date > $jadwal) ? "Telat Bayar" : "Sudah Bayar";
            $income->upload_date = date('Y-m-d');
            $save = $income->save();
            if ($save) {
                return $income;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * @param string $nisn
     * @param string $password
     * 
     * @return [type]
     */
    public function Login(string $nisn, string $password)
    {
        $siswa = Siswa::where('nisn', $nisn)->where('password', $password)->first();
        if ($siswa) {
            return $siswa;
        } else {
            return null;
        }
    }

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOneYear(int $id)
    {
        $data = Year::where('id', $id)->first();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @return [type]
     */
    public function GetAllYear()
    {
        $data = Year::all();
        return $data;
    }

    /**
     * @return [type]
     */
    public function GetAllMonth()
    {
        $data = Month::all();
        return $data;
    }

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOneMonth(int $id)
    {
        $data = Month::where('id', $id)->first();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @return [type]
     */
    public function GetHarga()
    {
        $data = Harga::where('id', 1)->first();
        return $data;
    }

    public function GetTransaction(string $ref)
    {
        $data = ModelsTransaction::where('reference', $ref)->first();
        if($data) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param Siswa $siswa
     * @param int $harga
     * @param Income $income
     * 
     * @return [type]
     */
    public function CallTripay(Siswa $siswa, int $harga, Income $income, string $method)
    {
        $merchantCode = env('TRIPAY_MERCHANT');
        $apiKey = env('TRIPAY_API_KEY');
        $privateKey = env('TRIPAY_PRIVATE_KEY');
        $mode = Constant::MODE_DEVELOPMENT;

        $guzzleOption = [];

        $client = new Client($merchantCode, $apiKey, $privateKey, $mode, $guzzleOption);
        $transaction = new Transaction($client);

        $email = str_replace(' ', '', $siswa->nama). '@gmail.com';
        $data = $transaction
        ->addOrderItem('Pembayaran Iuran-' . $siswa->nama. '/' . $income->year . ' ' . $income->month, $harga, 1)
        ->create([
            'method' => $method,
            'merchant_ref' => "INV-".$siswa->id."-".rand(1000, 9999),
            'customer_name' => $siswa->nama,
            'customer_email' => $email,
            'expired_time' => Helper::makeTimestamp('6 HOUR')
        ]);

        // $debugs = $client->debugs();
        // dd($debugs);
        return json_decode($data->getBody()->getContents(), true);
    }
}
