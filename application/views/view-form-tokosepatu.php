<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/toko.css">
    <title>Form Input Toko Sepatu</title>
</head>
 
<body>
    <center>
    <form action=" <?= base_url('tokosepatu/cetak'); ?>" 
        method="post">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Toko Sepatuku</div>
      <div class="input-container ic1">
        <input name="nama" id="nama" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="Nama Pembeli" class="placeholder">Nama Pembeli</label>
      </div>
      <div class="input-container ic2">
        <input name="hp" id="hp" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="No HP" class="placeholder">No Telepon</label>
      </div>
      <div class="input-container ic3">
        <select name="brand" id="brand" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="Brand" class="placeholder">Brand</label>
              <option value="0">--Pilih Sepatu--</option>
              <option value="Nike">Nike</option>
              <option value="Adidas">Adidas</option>
              <option value="Kickers">Kickers</option>
              <option value="Eiger">Eiger</option>
              <option value="Bucherri">Bucherri</option>
        </select>
      </div>
      <!-- <div class="input-container ic4">
        <input name="harga" id="harga" class="input" type="text" placeholder=" " readonly/>
        <div class="cut"></div>
        <label for="Harga" class="placeholder">Harga</label>
      </div> -->
      <div class="input-container ic5">
        <select name="size" id="size" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="size" class="placeholder">Size</label>
        <option value="0">--Pilih Size--</option>
              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
        </select>
      </div>
      <button type="text" class="submit">submit</button>
    </div>
        </form>
    </center>
</body>
</html>