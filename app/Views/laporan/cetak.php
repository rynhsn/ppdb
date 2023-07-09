<html>
<head>
    <title>Laporan PPDB <?= $tahun_ajaran ?></title>
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
    </style>
</head>
<body>
<!--heading dokumen-->
<h3 style="text-align: center">LAPORAN DATA PESERTA DIDIK</h3>
<h3 style="text-align: center">JENJANG PENDIDIKAN <?= $jenjang ?></h3>
<h3 style="text-align: center">TAHUN AJARAN <?= $tahun_ajaran ?></h3>

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