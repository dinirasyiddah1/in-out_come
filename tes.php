<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="forms">
<?php
$t =$_POST["tambah-hal"];

    

while ($t <=2) {
  
   echo' <div class="inputan" id="tambah-hal">
   <form action="" method="post">
           <input type="radio" name="a" value="3"> 3
           <input type="radio" name="a" value="2"> 2
              <br>
           <input type="radio" name="b" value="3"> a
           <input type="radio" name="b" value="2"> b
   
           <button type="submit" name="proses">Proses</button>
           
       </form>
   
   </div> ';  
    $t++;

}
?>
   
    <button id="tambah-hal" type="button" name="tambah" >Tambah halaman</button>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
        if($a == 3){
            $a=$a*100;
            
        }else if($a == 2){
            $a=$a*100;
            
        }else{
            echo "belum dipilih ";
        }
     $b = $_POST["b"];
        if ($b == 3) {
            $b = $b *200;
            
        }else if ($b == 2) {
            $b = $b *100;
            
        }else{
            echo "Belum di pilih";
        } 
        $total=$a+$b;
        echo "<p> maka hasil dari    adalah  $total</p>";  
    }

    ?>
    </div>
    <script src="script.js"></script>
</body>
</html>