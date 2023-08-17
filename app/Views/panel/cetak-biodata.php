<!DOCTYPE html>
<html>
<head>
    <title>Kop Surat</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: "Times New Roman", serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            border-bottom: 1px solid #000;
        }

        th, td {
            padding: 10px;
            /*border: 1px solid #000;*/
        }

        td {
            font-size: 12px;
            /*margin: 0;*/
            padding: 0 0 0 10px;
        }

        .logo {
            width: 90px;
            height: auto;
        }

        .company-details {
            text-align: center;
        }

        .company-name {
            font-weight: bold;
            font-size: 18px;
        }

        .address, .phone {
            font-size: 12px;
            font-weight: normal;
        }
    </style>
</head>
<body>
<table style="padding-top: 30px">
    <tr>
        <th style="width: 50px; padding-left: 30px">
            <img src="<?= FCPATH ?>/media/logos/logo.png" alt="Logo Yayasan" class="logo">
            <!--<img src="<?php //= base_url() ?>/media/logos/logo.png" alt="Logo Yayasan" class="logo">-->
        </th>
        <th class="company-details">
            <div style="padding-right: 120px" class="company-name">PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB)</div>
            <div style="padding-right: 120px" class="company-name"><?= strtoupper($lembaga['nama_lembaga']) ?></div>
            <div style="padding-right: 120px" class="company-name">Tahun Pelajaran <?= $lembaga['th_pelajaran'] ?></div>
            <div style="padding-right: 120px" class="address"><?= $lembaga['alamat'] ?></div>
            <div style="padding-right: 120px" class="phone">No. Telp: <?= $lembaga['telp'] ?></div>
        </th>
    </tr>
    <tr>
        <td colspan="2" style="text-decoration: underline; text-align: center; padding: 20px; font-weight: bold">BIODATA
            CALON SISWA
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>
                        <!-- Begin:Data Siswa -->
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px;"
                                    colspan="3">Data Siswa
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">NIK</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['nik'] ?></td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td><?= $siswa['nisn'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><?= $siswa['nama_lengkap'] ?></td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td><?= $siswa['tempat_lahir'] ?>
                                    , <?= date('d-m-Y', strtotime($siswa['tgl_lahir'])) ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?= $siswa['jk'] ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?= $siswa['agama'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td><?= $siswa['alamat_siswa'] ?></td>
                            </tr>
                            <tr>
                                <td>Desa/Kelurahan</td>
                                <td>:</td>
                                <td><?= $siswa['desa'] ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td><?= $siswa['kec'] ?></td>
                            </tr>
                            <tr>
                                <td>Kabupaten/Kota</td>
                                <td>:</td>
                                <td><?= $siswa['kab'] ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?= $siswa['prov'] ?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td>:</td>
                                <td><?= $siswa['kode_pos'] ?></td>
                            </tr>
                        </table>
                        <!-- End:Data Siswa -->
                    </td>
                    <td style="vertical-align: top">
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px;"
                                    colspan="3">Data Pendaftaran
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">No. Pendaftaran</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['no_pendaftaran'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pendaftaran</td>
                                <td>:</td>
                                <td><?= date('d-m-Y', strtotime($siswa['created_at'])) ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Orang
                                    Tua
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">No. Hp Orang Tua</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['no_hp_ortu'] ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Ayah
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Nama Ayah</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['nama_ayah'] ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>:</td>
                                <td><?= $siswa['nama_ibu'] ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Asal Sekolah
                                </td>
                            </tr>
                            <!--nama sekolah-->
                            <tr>
                                <td style="width: 150px">Nama Sekolah</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['nama_sekolah'] ?></td>
                            </tr>
                            <!--alamat sekolah-->
                            <tr>
                                <td>Alamat Sekolah</td>
                                <td>:</td>
                                <td><?= $siswa['lokasi_sekolah'] ?></td>
                            </tr>
                            <tr>
                                <td>No. Ujian Nasional</td>
                                <td>:</td>
                                <td><?= $siswa['no_un'] ?></td>
                            </tr>
                            <tr>
                                <td>No. Seri Ijazah</td>
                                <td>:</td>
                                <td><?= $siswa['no_seri_ijazah'] ?></td>
                            </tr>
                            <tr>
                                <td>No. Seri SKHUN</td>
                                <td>:</td>
                                <td><?= $siswa['no_seri_skhun'] ?></td>
                            </tr>
                            <tr>
                                <td>No. STTB / Tahun Lulus</td>
                                <td>:</td>
                                <td><?= $siswa['sttb_lulus'] ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Isi surat -->
</body>
<script>
    window.print();
</script>
</html>
