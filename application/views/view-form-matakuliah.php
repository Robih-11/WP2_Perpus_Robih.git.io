<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/kuliah.css">
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action=" <?= base_url('Matakuliah/cetak'); ?>" 
        method="post">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Form Input Data Kuliah</div>
      <div class="input-container ic1">
        <input name="kode" id="kode" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="Kodematakuliah" class="placeholder">Kode Matakuliah</label>
      </div>
      <div class="input-container ic2">
        <input name="nama" id="nama" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="Namamtk" class="placeholder">Nama MTK</label>
      </div>
      <div class="input-container ic2">
        <select name="sks" id="sks" class="input" type="text" placeholder=" " />
          <!-- <select name="sks" id="sks"> -->
              <option value="">Pilih SKS</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
          <div class="cut"</div>
          <label for="sks" class="placeholder">Pilih SKS</label>
          </select>
        </div>
      <button type="text" class="submit">submit</button>
    </div>
        </form>
    </center>
</body>

</html>