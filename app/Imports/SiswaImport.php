<?php

namespace App\Imports;

use App\Models\Harga;
use App\Models\Income;
use App\Models\Month;
use App\Models\Siswa;
use App\Models\Year;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SiswaImport implements ToCollection, WithStartRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $daftarBulan = Month::get();
        $harga = Harga::first();

        if ($daftarBulan->count() && $harga) {
            foreach ($collection as $key => $col) {
                $nama = $col[1];
                $nisn = $col[2];
                $tahun_masuk = $col[3];
                $angkatan = $col[4];
                $password = $col[5];
                if ($nama && $nisn && $tahun_masuk && $angkatan && $password) {
                    if (is_numeric($tahun_masuk) && is_numeric($angkatan)) {
                        if ((int) $tahun_masuk > 1111 && (int) $tahun_masuk < 9999 && (int) $angkatan > 1111 && (int) $angkatan < 9999) {
                            $siswaExists = Siswa::where('nisn', $nisn)->exists();

                            if (!$siswaExists) {
                                DB::beginTransaction();
                                $tahun_masuk = Year::firstOrCreate([
                                    'year' => $tahun_masuk
                                ]);
                                $angkatan = Year::firstOrCreate([
                                    'year' => $angkatan
                                ]);

                                $sisaTahun = (int) $angkatan->year + 3 - (int) $tahun_masuk->year;

                                if ($angkatan->year > $tahun_masuk->year || $sisaTahun < 0) {
                                    DB::rollBack();
                                } else {
                                    $siswa = Siswa::create([
                                        'tahun_masuk' => $tahun_masuk->year,
                                        'angkatan' => $angkatan->year,
                                        'password' => $password,
                                        'nisn' => $nisn,
                                        'nama' => $nama,
                                        'year_id' => $tahun_masuk->id,
                                    ]);

                                    $cek = true;
                                    $mulai = (int) $tahun_masuk->year;
                                    $akhir = (int) $tahun_masuk->year + $sisaTahun;
                                    foreach (range($mulai, $akhir) as $key => $tahun) {
                                        $temp = Year::firstOrNew(['year' => $tahun]);
                                        if (!$temp->id) {
                                            $temp->save();
                                        }
                                        foreach ($daftarBulan as $key => $bulan) {
                                            if (($mulai === $tahun && $bulan->id <= 6) || ($tahun === $akhir && $bulan->id > 6)) {
                                                continue;
                                            }
                                            $income = new Income();
                                            $income->siswa_id = $siswa->id;
                                            $income->year_id = $temp->id;
                                            $income->amount = $harga->amoung;
                                            $income->month_id = $bulan->id;
                                            $income->name = $siswa->nama;
                                            $income->nisn = $siswa->nisn;
                                            $income->year = $temp->year;
                                            $income->month = $bulan->month;
                                            $income->status = 'Belum Bayar';
                                            $save = $income->save();
                                            if (!$save) {
                                                DB::rollBack();
                                                $cek = false;
                                            }
                                        }
                                    }
                                    if ($cek) {
                                        DB::commit();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function startRow(): int
    {
        return 7;
    }
}
