<html>
<head>
    <title>Laporan PPDB <?= $tahun_ajaran ?></title>
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
    <tr style="border: none">
        <th style="width: 50px; padding-left: 30px;border: none">
                        <img src="<?= FCPATH ?>media\logos\logo.png" alt="Logo Yayasan" class="logo">
<!--            <img src="--><?php //= base_url() ?><!--media/logos/logo.png" alt="Logo Yayasan" class="logo">-->
        </th>
        <th class="company-details">
            <div style="padding-right: 120px" class="company-name">LAPORAN DATA PESERTA DIDIK</div>
            <div style="padding-right: 120px" class="company-name">JENJANG PENDIDIKAN <?= $jenjang ?></div>
            <div style="padding-right: 120px" class="company-name"><?= strtoupper("Tahun Pelajaran {$lembaga['th_pelajaran']}") ?></div>
        </th>
    </tr>
</table>

<p style="margin-left: 25px">Tanggal Pembuatan : <?= date('d M Y', strtotime($laporan['created_at'])) ?>

<table>
    <thead>
    <tr>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Tempat, Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <!--                        --><?php //dd($detail)?>
    <?php foreach ($detail as $item): ?>
        <tr>
            <td>
                <?= $item['nisn'] ?>
            </td>
            <td><?= $item['nama_lengkap'] ?></td>
            <td><?= $item['tempat_lahir'] . ', ' . date('d M Y', strtotime($item['tgl_lahir'])) ?></td>
            <td><?= $item['alamat_siswa'] ?></td>
            <td>
                <?php if ($item['status_verifikasi'] == '1'): ?>
                    Diterima
                <?php elseif ($item['status_verifikasi'] == '0'): ?>
                    Belum ditentukan
                <?php else: ?>
                    Belum diterima
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>