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

<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Posyandu Dari $awal sampai $akhir.xls");
$table = '
    <table border="1">
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
        </tr>';
      $no =1;
      foreach($databayi as $dt) {
          $table .= '
         <tr>
                <td>'.$dt->kode_anak.'</td>
                <td>'.$dt->nama_anak.'</td>
                <td>'.$dt->tanggal_lahir.'</td>
                <td>'.$dt->berat_badan.'</td>
                <td>'.$dt->tinggi_badan.'</td>
                <td>'.$dt->suhu_anak.'</td>
                <td>'.$dt->lingkar_lengan.'</td>
                <td>'.$dt->lingkar_kepala.'</td>
                <td>'.$dt->nama_ayah.'</td>
                <td>'.$dt->nama_ibu.'</td>
                <td>'.$dt->waktu.'</td>

            </tr>';
      }
      $table .='</table>';
      echo $table;
    
    ?>
</body>

</html>