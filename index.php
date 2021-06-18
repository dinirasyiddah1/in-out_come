<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "in-out_come";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      
    ?>

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

    <div class="container" style="margin-top:100px;">
    <div class="card text-center">
    <div class="card-header">
        <form action="" method="post">
            <!-- tanggal -->
            <label for="tanggal">Tanggal :</label>
            <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
            <!-- akhir tanggal -->

            <!-- tipe -->
            <label for="tipe">Tipe :</label>
            <select name="tipe" id="tipe">
                <option value="pemasukan"> Pemasukan</option>
                <option value="pengeluaran"> Pengeluaran</option>
            </select>
            <!-- akhir tipe -->

            <!-- jumlah -->
            <label for="jumlah">Jumlah :</label>
            <input type="number" name="jumlah" id="jumlah" min="0">
            <!-- akhir jumlah -->

            <!-- keterangan -->
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="ket">
            <!-- akhir keterangan -->

            <button type="submit" name="simpan">Simpan</button>
            
        </form>
    </div>

      
      <!-- insert data -->
    <?php
        
       
        if(isset($_POST["simpan"])){
            $tanggal = $_POST["tanggal"];
            $tipe = $_POST["tipe"];
            $jumlah = $_POST["jumlah"];
            $keterangan = $_POST["keterangan"];
            if($tipe == "pemasukan"){
                $pemasukan = $jumlah;
                $pengeluaran = 0;
                $insertPemasukan = "INSERT INTO list (tanggal, pemasukan, pengeluaran, keterangan)
                VALUES ('$tanggal', $pemasukan, $pengeluaran, '$keterangan')";
                $conn->query($insertPemasukan);
                
            }else{
                $pengeluaran = $jumlah;
                echo "<br><b>".$tanggal."</b>";
                $pemasukan = 0;
                $insertPengeluaran = "INSERT INTO list (tanggal, pemasukan, pengeluaran, keterangan)
                VALUES ('$tanggal', $pemasukan, $pengeluaran, '$keterangan')";
                $conn->query($insertPengeluaran);
            }

            $sql = "SELECT * FROM list WHERE tanggal='$tanggal'";
            $result = $conn->query($sql);     
        }else{

            $tanggal = date('Y-m-d');
            // echo "<br><b>".$tanggal."</b>";
            $sql = "SELECT * FROM list WHERE tanggal='$tanggal'";
            $result = $conn->query($sql);      
        }
    
        

    ?>

    <div class="card-body">
        <tr>
            <td style="margin:10px;"><input type="date"></td>
        </tr>
        <table style="margin:100px; margin-top:0px; margin-bottom:0px;">
        
        <tr>
            <th style="width:300px">Keterangan</th>
            <th style="width:300px">Pemasukan</th>
            <th style="width:300px">Pengeluaran</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
                        while ($row=$result->fetch_assoc()) {
        ?>
        <tr>
            <td><?=$row['keterangan']?></td>
            <td><?=$row['pemasukan']?></td>
            <td><?=$row['pengeluaran']?></td>
            <td>Hapus</td>
        </tr>
        <?php
                        };};
        ?>

        </table>
        
    </div>
    <div class="card-footer text-muted">
    <table style="margin:100px; margin-top:0px; margin-bottom:20px;">
        <tr>
            <th style="width:300px">Total</th>
            <td style="width:300px">
                <?php
                    $sqlSum = "SELECT SUM(pemasukan) AS total_pemasukan FROM list";
                    $resultSum = $conn->query($sqlSum); 
                    if ($resultSum->num_rows > 0) {
                    $rowSum=$resultSum->fetch_assoc();
                    $total_pemasukan = $rowSum['total_pemasukan'];
                    echo $total_pemasukan;
                    }
                ?>
            </td>
            <td style="width:300px">
            <?php
                    $sqlSum = "SELECT SUM(pengeluaran) AS total_pengeluaran FROM list";
                    $resultSum = $conn->query($sqlSum); 
                    if ($resultSum->num_rows > 0) {
                    $rowSum=$resultSum->fetch_assoc();
                    $total_pengeluaran = $rowSum['total_pengeluaran'];
                    echo $total_pengeluaran;
                    }
                ?>
            </td>
        </tr>
        
        </table>
        <table style="margin:100px; margin-top:0px; margin-bottom:0px;">
        <tr>
            <th style="width:300px">Saldo</th>
            <th style="width:600px; margin-left:500px;">
                <?php
                    $saldo = $total_pemasukan - $total_pengeluaran;
                    echo $saldo;
                ?>
            </th>
        </tr>
        </table>

    </div>
    </div>
    </div>

    

    

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