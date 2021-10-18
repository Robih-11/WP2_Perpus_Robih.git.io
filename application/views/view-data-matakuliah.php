<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/kuliah.css">
    <title>Data Mata Kuliah</title>
</head>

<body>
    <div class="form">
    <center>
        <table>
                <!-- <th colspan="3"> -->
                   <div class="title"> Tampil Data Mata Kuliah</div>
                <hr>
                <!-- <td colspan="3"> -->
            
            <!-- <div class="input-container ic1"></div> -->
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>