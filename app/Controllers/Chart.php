<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use CodeIgniter\API\ResponseTrait;

class Chart extends BaseController
{
    use ResponseTrait;

    public function getChartData()
    {
        $siswaModel = new SiswaModel();
        // Panggil model Anda untuk mendapatkan data jumlah siswa berdasarkan jenjang dari database
        $numYears = 3; // Misalnya, ambil data 3 tahun terakhir

        $dataSMP = $siswaModel->getJumlahSiswaByJenjang($numYears, 'SMP');
        $dataSMK = $siswaModel->getJumlahSiswaByJenjang($numYears, 'SMK');
        $dataMA = $siswaModel->getJumlahSiswaByJenjang($numYears, 'Madrasah Aliyah');

        $startYear = date('Y') - $numYears + 1;
        $dataTahun = [];
        for ($i = $startYear; $i <= date('Y'); $i++) {
            $dataTahun[] = $i;
        }

        $data = [$dataSMP, $dataSMK, $dataMA, $dataTahun];

        return $this->respond($data);
    }
}
