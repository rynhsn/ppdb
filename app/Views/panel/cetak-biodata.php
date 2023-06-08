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
            font-family: "Times New Roman", sans-serif;
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
                            <tr>
                                <td>Anak ke</td>
                                <td>:</td>
                                <td><?= $siswa['anak_ke'] ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Saudara</td>
                                <td>:</td>
                                <td><?= $siswa['jml_saudara'] ?></td>
                            </tr>
                            <tr>
                                <td>No. Hp</td>
                                <td>:</td>
                                <td><?= $siswa['no_hp_siswa'] ?></td>
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
                            <tr>
                                <td>Jarak ke sekolah</td>
                                <td>:</td>
                                <td><?= $siswa['jarak'] ?></td>
                            </tr>
                            <tr>
                                <td>Transportasi ke sekolah</td>
                                <td>:</td>
                                <td><?= $siswa['trans'] ?></td>
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
                                    Tua/Wali
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">No. KK</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['no_kk'] ?></td>
                            </tr>
                            <tr>
                                <td style="width: 150px">No. Hp Orang Tua/Wali</td>
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
                            <!--nik ayah-->
                            <tr>
                                <td>NIK Ayah</td>
                                <td>:</td>
                                <td><?= $siswa['nik_ayah'] ?></td>
                            </tr>
                            <!--status ayah-->
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?= $siswa['status_ayah'] ?></td>
                            </tr>
                            <!--tahun lahir ayah-->
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= $siswa['th_lahir_ayah'] ?></td>
                            </tr>
                            <!--pendidikan ayah-->
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= $siswa['pdd_ayah'] ?></td>
                            </tr>
                            <!--pekerjaan ayah-->
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= $siswa['pekerjaan_ayah'] ?></td>
                            </tr>
                            <!--penghasilan ayah-->
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= $siswa['penghasilan_ayah'] ?></td>
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
                            <!--nik ibu-->
                            <tr>
                                <td>NIK Ibu</td>
                                <td>:</td>
                                <td><?= $siswa['nik_ibu'] ?></td>
                            </tr>
                            <!--status ibu-->
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?= $siswa['status_ibu'] ?></td>
                            </tr>
                            <!--tahun lahir ibu-->
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= $siswa['th_lahir_ibu'] ?></td>
                            </tr>
                            <!--pendidikan ibu-->
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= $siswa['pdd_ibu'] ?></td>
                            </tr>
                            <!--pekerjaan ibu-->
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= $siswa['pekerjaan_ibu'] ?></td>
                            </tr>
                            <!--penghasilan ibu-->
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= $siswa['penghasilan_ibu'] ?></td>
                            </tr>
                        </table>
                    </td>
                    <td style="vertical-align: top;">
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Wali
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Nama Wali</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['nama_wali'] ?></td>
                            </tr>
                            <!--nik wali-->
                            <tr>
                                <td>NIK Wali</td>
                                <td>:</td>
                                <td><?= $siswa['nik_wali'] ?></td>
                            </tr>
                            <!--tahun lahir wali-->
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>:</td>
                                <td><?= $siswa['th_lahir_wali'] ?></td>
                            </tr>
                            <!--pendidikan wali-->
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?= $siswa['pdd_wali'] ?></td>
                            </tr>
                            <!--pekerjaan wali-->
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?= $siswa['pekerjaan_wali'] ?></td>
                            </tr>
                            <!--penghasilan wali-->
                            <tr>
                                <td>Penghasilan</td>
                                <td>:</td>
                                <td><?= $siswa['penghasilan_wali'] ?></td>
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
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;"
                                    colspan="3">Data Asal Sekolah
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">NPSN Sekolah</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['npsn_sekolah'] ?></td>
                            </tr>
                            <!--nama sekolah-->
                            <tr>
                                <td>Nama Sekolah</td>
                                <td>:</td>
                                <td><?= $siswa['nama_sekolah'] ?></td>
                            </tr>
                            <!--alamat sekolah-->
                            <tr>
                                <td>Alamat Sekolah</td>
                                <td>:</td>
                                <td><?= $siswa['lokasi_sekolah'] ?></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td style="font-weight: bold; text-decoration: underline; padding-bottom: 10px; padding-top: 20px;" colspan="3">
                                    Data Kepemilikan
                                    Kartu
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 150px">No. KKS</td>
                                <td style="width: 10px">:</td>
                                <td><?= $siswa['no_kks'] ?></td>
                            </tr>
                            <!--no. kps-->
                            <tr>
                                <td>No. PKH</td>
                                <td>:</td>
                                <td><?= $siswa['no_pkh'] ?></td>
                            </tr>
                            <!--no. kip-->
                            <tr>
                                <td>No. KIP</td>
                                <td>:</td>
                                <td><?= $siswa['no_kip'] ?></td>
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
