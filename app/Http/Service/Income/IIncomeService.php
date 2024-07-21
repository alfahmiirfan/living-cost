<?php

namespace App\Http\Service\Income;

use App\Models\Harga;
use App\Models\Month;
use App\Models\Siswa;
use App\Models\Year;

interface IIncomeService
{
    /**
     * @param int $siswa_id
     * @param int $year_id
     * @param int $amount
     * @param int $month_id
     * @param string $name
     * @param string $nisn
     * @param string $year
     * @param string $month
     * 
     * @return [type]
     */
    public function Create(int $siswa_id, int $year_id, int $amount, int $month_id, string $name, string $nisn, string $year, string $month);

    /**
     * @param int $id
     * 
     * @return [type]
     */
    public function GetOne(int $id);

    /**
     * @param int $siswa_id
     * @param string|null $year
     * 
     * @return [type]
     */
    public function GetBySiswa(int $siswa_id, string|null $year);

    /**
     * @param int $siswa_id
     * @return [type]
     */
    public function GetYears(int $siswa_id);

    /**
     * @param int $page
     * @param int $limit
     * @param string|null $search
     * 
     * @return [type]
     */
    public function List(int $page = 1, int $limit = 10, ?string $search = null);

    /**
     * @return [type]
     */
    public function TotalIncome();
}