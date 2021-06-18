<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
   <div id="from">

          <div id="rad">
          <form action="" method="post">
           <input type="radio" name="a" value="3"> 3
           <input type="radio" name="a" value="2"> 2
              <br>
           <input type="radio" name="b" value="3"> a
           <input type="radio" name="b" value="2"> b
   
           <button type="submit" name="proses">Proses</button>
           </form>
          </div>
           
    </div>
   
    <button id="tambah-hal" type="submit" onclick="myFunction()" name="tambah" >Tambah halaman</button>
    <?php
    if(isset($_POST["proses"])){//kokak dini 
        alert("oke");
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
            echo "<p> maka hasil dari    adalah__ $total</p>";  
    }
    

    ?>
    <script>
    function myFunction() {
        var rad = document.getElementById("rad");
        var clone = rad.cloneNode(true);
        document.getElementById("from").appendChild(clone);
    }
    </script>
</body>
</html>