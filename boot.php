<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <form action="" method="post">
        <!-- tipe -->
        <label for="tipe">Tipe :</label>
        <select name="tipe" id="tipe">
            <option value="pemasukan"> Pemasukan</option>
            <option value="pengeluaran"> Pengeluaran</option>
        </select>
        <!-- akhir tipe -->

        <!-- jumlah -->
        <label for="jumlah">Jumlah :</label>
        <input type="number" name="jumlah" min="0">
        <!-- akhir jumlah -->

        <!-- keterangan -->
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan">
        <!-- akhir keterangan -->

        <button type="submit" name="simpan">Simpan</button>
    </form>
    </div>

    
        <div class="col-md-6" style="height:300px">
            Pemasukan : <br>
            <div id="pemasukan"></div>
        </div>
        <div class="col-md-6" style="height:300px">
            Pengeluaran : <br>
            <div id="pengeluaran"></div>
        </div>
        
    <?php
        
       
        if(isset($_POST["simpan"])){
            $tipe = $_POST["tipe"];
            $jumlah = $_POST["jumlah"];
            $keterangan = $_POST["keterangan"];
            if($tipe == "pemasukan"){
                $pemasukan = $jumlah;
                echo  $keterangan;
                echo ":";
                echo $pemasukan;
            }else{
                $pengeluaran = $jumlah;
                echo  $keterangan;
                echo ":";
                echo $pengeluaran;
            }
        }
    ?>

    <script>
        function myFunction(){
            var pemasukan = document.createElement("LI");
            var nilai = document.ge
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>