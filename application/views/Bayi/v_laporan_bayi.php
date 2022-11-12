<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 11px;
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 14px;
        }
    </style>
</head>


<body>
    <table>
        <tr>
            <th>Kode Anak</th>
            <th>nama Anak</th>
            <th>Tanggal lahir</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Suhu Anak</th>
            <th>Lingkar Lengan</th>
            <th>Lingkar Kepala</th>
            <th> ayah</th>
            <th> Ibu</th>
            <th>Tanggal</th>
        </tr>
        <?php foreach ($databayi as $dt) : ?>
            <tr>
                <td><?php echo $dt->kode_anak; ?></td>
                <td><?php echo $dt->nama_anak; ?></td>
                <td><?php echo $dt->tanggal_lahir; ?></td>
                <td><?php echo $dt->berat_badan; ?></td>
                <td><?php echo $dt->tinggi_badan; ?></td>
                <td><?php echo $dt->suhu_anak; ?></td>
                <td><?php echo $dt->lingkar_lengan; ?></td>
                <td><?php echo $dt->lingkar_kepala; ?></td>
                <td><?php echo $dt->nama_ayah; ?></td>
                <td><?php echo $dt->nama_ibu; ?></td>
                <td><?php echo $dt->waktu; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>