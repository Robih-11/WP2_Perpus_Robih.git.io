<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/viewtoko.css">
    <title>Data Toko Sepatuku</title>
</head>

<body>
    <div class="form">
    <center>
        <table>
                <!-- <th colspan="3"> -->
                   <div class="title"> Data Transaksi Toko Sepatuku</div>
                <hr>
                <!-- <td colspan="3"> -->
                <div class="input-container ic1"></div>
                <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td>
                    <?= $hp; ?>
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>:</td>
                <td>
                    <?= $brand; ?>
                </td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>
                    <?= $size; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('tokosepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>