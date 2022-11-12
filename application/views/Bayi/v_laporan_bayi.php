<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>


<body>
    <table>
        <tr>
            <th>KODE ANAK</th>
            <th>NAMA ANAK</th>
            <th>TANGGAL LAHIR</th>
            <th>BERAT BADAN</th>
            <th>TINGGI BADAN</th>
            <th>SUHU ANAK</th>
            <th>LINGKAR LENGAN</th>
            <th>LINGKAR KEPALA</th>
            <th>NAMA AYAH</th>
            <th>NAMA IBU</th>
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

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>