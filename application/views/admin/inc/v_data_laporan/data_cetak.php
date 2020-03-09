<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Data</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/template/') ?>img/icon.png"/>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 2.0; font-weight: bold;">
                   PT FIRUZ IMANI OETAMA
                </span>
                <span style="line-height: 1.5; font-weight: normal;">
                    <br>Jl. Malaka Jaya, Pondok Kopi, Jakarta Timur
                    <br>No telp 021-29843055 / 021-29843070
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <p align="center">
        <b>LAPORAN DESAIN ORDER</b><br>
    </p>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Tema</th>
                <th>Jenis Desain</th>
                <th>Ukuran</th>
                <th>Deskripsi</th>
                <th>Tanggal Event</th>
                <th>Lokasi Event</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($out as $row) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama_cus ?></td>
                <td><?php echo $row->nama_des ?></td>
                <td><?php echo $row->nama_jes ?></td>
                <td><?php echo $row->nama_uku ?></td>
                <td><?php echo $row->deskripsi ?></td>
                <td><?php echo $row->tanggal_event ?></td>
                <td><?php echo $row->lokasi_event ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>