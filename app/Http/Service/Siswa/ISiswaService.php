<?php

namespace App\Http\Service\Siswa;

use App\Models\Income;
use App\Models\Siswa;
use App\Models\Year;

interface ISiswaService
{
    /**
     * @param int $page
     * @param int $limit
     * @param string|null $search
     * 
     * @return [type]
     */
    public function List(int $page = 1,int $limit = 10,string $search = null);

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOne(int $id);

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
    public function Create(Year $year, string $nisn, string $password, string $name, string $angkatan, int $year_id);

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
    public function Update(int $id, string $nisn, string $password, string $name, string $angkatan, int $year_id);

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function Delete(int $id);

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function Payment(int $id);

    /**
     * @param string $nisn
     * @param string $password
     * 
     * @return [type]
     */
    public function Login(string $nisn, string $password);

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOneYear(int $id);

    /**
     * @return [type]
     */
    public function GetAllYear();

    /**
     * @return [type]
     */
    public function GetAllMonth();

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOneMonth(int $id);

    /**
     * @return [type]
     */
    public function GetHarga();

    /**
     * @param Siswa $siswa
     * @param int $harga
     * @param Income $income
     * 
     * @return [type]
     */
    public function CallTripay(Siswa $siswa, int $harga, Income $income, string $method);

    /**
     * @param string $ref
     * 
     * @return [type]
     */
    public function GetTransaction(string $ref);
}
