<html>
<head>
    <title>Laporan Keuangan PPDB <?= $tahun_ajaran ?></title>
    <style>
        @page {
            size: A4 landscape;
            margin: 10px;
        }

        body {
            font-family: "Times New Roman", serif;
        }

        table {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            border-collapse: collapse;
        }

        th {
            border: 1px solid #000;
        }

        th, td {
            border: 1px solid #000;
        }

        td {
            font-size: 12px;
            /*margin: 0;*/
            padding: 0 0 0 10px;
        }

        .logo {
            width: 120px;
            height: auto;
        }

        .company-details {
            text-align: center;
            border: none;
        }

        .company-name {
            font-weight: bold;
            font-size: 18px;
        }

        .address, .phone {
            font-size: 8px;
            font-weight: normal;
        }
    </style>
</head>
<body>
<!--heading dokumen-->
<!--<h3 style="text-align: center">LAPORAN DATA PESERTA DIDIK</h3>-->
<!--<h3 style="text-align: center">JENJANG PENDIDIKAN --><?php //= $jenjang ?><!--</h3>-->
<!--<h3 style="text-align: center">TAHUN AJARAN --><?php //= $tahun_ajaran ?><!--</h3>-->

<table style="border: none">
    <tr style="border: none; border-bottom: 3px solid #000;">
        <th style="width: 50px; padding-left: 30px;border: none">
            <!--                        <img src="-->
            <?php //= FCPATH ?><!--media\logos\logo.png" alt="Logo Yayasan" class="logo">-->
            <img src="<?= base_url() ?>media/logos/logo.png" alt="Logo Yayasan" class="logo">
        </th>
        <th class="company-details">
            <div style="padding-right: 120px" class="company-name">LAPORAN DATA KEUANGAN</div>
            <div style="padding-right: 120px" class="company-name">JENJANG PENDIDIKAN <?= $jenjang ?></div>
            <div style="padding-right: 120px"
                 class="company-name"><?= strtoupper("Tahun Pelajaran {$tahun_ajaran}") ?></div>
        </th>
    </tr>
</table>

<p style="margin-left: 25px">Tanggal Pembuatan : <?= date('d F Y') ?>


<table>
    <thead>
    <tr>
        <th>No. Pendaftaran</th>
        <th>NIK</th>
        <th>Pengirim</th>
        <th>Tujuan</th>
        <th>Pada</th>
        <th>Status</th>
        <th>Jumlah</th>
    </tr>
    </thead>
    <tbody>
    <?php $total = 0; ?>
    <?php foreach ($laporan as $item): ?>
        <tr>
            <?php $total += $item['jumlah'] ?>
            <td><?= $item['no_pendaftaran'] ?></td>
            <td><?= $item['nik'] ?></td>
            <td><?= $item['dari'] ?></td>
            <td><?= $item['ke'] ?></td>
            <td><?= $item['tanggal'] ?></td>
            <td><?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][0] ?></td>
            <td>Rp. <?= number_format($item['jumlah']) ?>,-</td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="6">Total Transaksi Periode <?= $periode ?></th>
        <th>Rp. <?= number_format($total, 0, ',', '.') ?>,-</th>
    </tr>
    </tbody>
</table>
    <script>
        window.print();
    </script>
</body>
</html>