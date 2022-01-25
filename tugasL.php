<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Destinasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <h1 align="center">Tempat Destinasi Liburan Yogyakarta</h1>
    <form action="" method="post">
        <table align=center>
        <tr>
            <th></th>
            <th align="left">Tempat</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Bukit Bintang</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Pantai Sadranan</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Candi Borobudur</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Candi Prambanan</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Keraton Yogyakarta</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Malioboro</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendopo Lawas</td>
            <td> -> Cafe</td>
            <td></td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Goa Pindul</td>
            <td>Rp. 100.000</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        </table>
        <br><br>

        <div class="">
            <label for="pilih">Pilih Tempat Destinasi = </label>
            <input type="text" name="pilih" id="pilih"/>
            <input type="submit" value="Proses" name="proses">
       </div>



       <?php
            if(isset($_POST["proses"])){
                $pilih = $_POST["pilih"];
                if($pilih == "1"){
        ?>
                  <h2 align="center" >Bukit Bintang</h2>
                  <table align="center">
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="satu" value="Proses"></td>
                    </tr>
                  </table>
    
          <?php }elseif($pilih == "2"){ ?>
                  <h2 align="center">Pantai Sadrana</h2>
                  <table align="center" >
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="dua" value="Proses"></td>
                    </tr>
                  </table>
                    
          <?php }elseif($pilih == "3"){ ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                     <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="tiga" value="Proses"></td>
                    </tr>
                  </table>
                
          <?php }elseif($pilih == "4"){ ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <table  align="center">
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="tiga" value="Proses"></td>
                    </tr>
                  </table>
                 
          <?php }elseif($pilih == "5"){ ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <table align="center">
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="empat" value="Proses"></td>
                    </tr>
                  </table>
           
          <?php }elseif($pilih == "6"){ ?>
                  <h2 align="center">Malioboro</h2>
                  <table align="center">
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Total uang yang akan dibayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="empat" value="Proses"></td>
                    </tr>
                  </table>
                
         <?php }elseif($pilih == "7"){ ?>
                  <h2 align="center">Cafe Pendopo Lawas</h2>
                  <h3 align="center">Pilih Menu Makanan / Minuman</h3>
                  <table align="center" cellpadding="6">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Makanan</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>1. Mie Goreng</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>2. Ayam Goreng</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>3. Ayam Geprek</td>
                      <td>Rp. 13.000</td>
                    </tr>
                    <tr>
                      <th>Minuman</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>1. Green Tea</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>2. Bubble Tea</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>3. Jus Buah</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  
                  <div class="menu">
                     <label for="pilih">Pilih Menu = </label>
                     <input type="text" name="pilih" id="pilih"/>

                     <input type="text" name="jumlah" placeholder="Masukkan Jumlah Pesanan">
                     <input type="text" name="bayar" placeholder="Bayar">
                     <input type="submit" name="menu" value="Pesan">
                  </div>
         <?php }elseif($pilih == "8"){ ?>
                  <h2 align="center">Goa Pindul</h2>
                  <table align="center">
                    <tr>
                      <td><td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="text" name="tiket"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="text" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="lima" value="Proses"></td>
                    </tr>
                  </table>
                    
          <?php }
            }

            if(isset($_POST["satu"])) {
                $tiket = $_POST["tiket"];
                $bayar = $_POST["bayar"];
                $jumlah = $total*10000;
                if ($total >= 7) {
                    $diskon = $jumlah*0.15;
                    $totalakhir = $jumlah - $diskon;
                }elseif ($total >= 5) {
                    $diskon = $jumlah*0.1;
                    $totalakhir = $jumlah - $diskon;
                }elseif ($total < 4) {
                    $diskon = $total*0.05;
                    $totalakhir = $total - $diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir = $jumlah;
                }
                $kembalian = $bayar - $totalakhir;
          ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Mendapatkan Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Total Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Uang Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST["dua"])) {
                $tiket = $_POST["tiket"];
                $bayar = $_POST["bayar"];
                $jumlah = $total*15000;
                if ($total >= 7) {
                    $diskon = $jumlah * 0.15;
                    $totalakhir = $jumlah-$diskon;
                }elseif ($total >= 5) {
                    $diskon = $jumlah*0.1;
                    $totalakhir = $jumlah - $diskon;
                }elseif ($total < 4) {
                    $diskon = jumlah * 0.05;
                    $totalakhir = $jumlah - $diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir = $jumlah;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Mendapatkan Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Total Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Uang Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
         <?php }
            if(isset($_POST["tiga"])) {
                $tiket = $_POST["tiket"];
                $bayar = $_POST["bayar"];
                $jumlah = $total * 50000;
                if ($total >= 7) {
                    $diskon = $jumlah * 0.15;
                    $totalakhir = $jumlah - $diskon;
                }elseif ($total >=5) {
                    $diskon = $jumlah *0.1;
                    $totalakhir = $jumlah-$diskon;
                }elseif ($total<4) {
                    $diskon=$jumlah*0.05;
                    $totalakhir=$jumlah-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$jumlah;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Mendapatkan Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Total Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Uang Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST["empat"])) {
                $tiket=$_POST["tiket"];
                $bayar=$_POST['bayar'];
                $jumlah=$total*5000;
                if ($total >= 7) {
                    $diskon=$jumlah*0.15;
                    $totalakhir=$jumlah-$diskon;
                }elseif ($total >=5) {
                    $diskon=$jumlah*0.1;
                    $totalakhir=$jumlah-$diskon;
                }elseif ($total<4) {
                    $diskon=$jumlah*0.05;
                    $totalakhir=$jumlah-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$jumlah;
                }
                $kembalian=$bayar-$totalakhir;
          
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Mendapatkan Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Total Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Uang Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST["lima"])) {
                $tiket=$_POST["tiket"];
                $bayar=$_POST["bayar"];
                $jumlah=$total*100000;
                if ($total >= 7) {
                    $diskon=$jumlah*0.15;
                    $totalakhir=$jumlah-$diskon;
                }elseif ($total >= 5) {
                    $diskon=$jumlah*0.1;
                    $totalakhir=$jumlah-$diskon;
                }elseif ($total<4) {
                    $diskon=$jumlah*0.05;
                    $totalakhir=$jumlah-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$jumlah;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Mendapatkan Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Total Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Uang Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST["menu"])){
              $pilih = $_POST["pilih"];
              $tiket = $_POST["tiket"];
              $bayar = $_POST['bayar'];
              
              if($pilih == 1){
                $jumlah = $total * 15000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }else if($pilih == 2){
                $jumlah = $total * 10000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }else if($pilih == 3){
                $jumlah = $total * 13000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }else if($pilih == 4){
                $jumlah = $total * 13000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }else if($pilih == 5){
                $jumlah = $total * 11000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }else if($pilih == 6){
                $jumlah = $total * 12000;
                if($total >= 7){
                  $diskon1 = "15%";
                  $diskon = $jumlah * 0.15;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=4){
                  $diskon1 = "10%";
                  $diskon = $jumlah * 0.1;
                  $totalakhir = $jumlah - $diskon;
                }else if($total >=2){
                  $diskon1 = "5%";
                  $diskon = $jumlah * 0.05;
                  $totalakhir = $jumlah - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $jumlah;
                }
              }
              $kembalian = $bayar - $totalakhir;
          ?>
               <table align="center"> 
                 <tr>
                   <td>Total Bayar</td>
                   <td>:</td>
                   <td><?php echo $totalakhir;?></td>
                 </tr>
                 <tr>
                   <td>Mendapatkan Diskon</td>
                   <td>:</td>
                   <td><?php echo $diskon1;?></td>
                 </tr>
                 <tr>
                   <td>Total Uang Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar;?></td>
                 </tr>
                 <tr>
                   <td>Uang Kembalian</td>
                   <td>:</td>
                   <td><?php echo $kembalian;?></td>
                 </tr>
               </table>
          <?php }
          ?>
    </form>    
</body>
</html>