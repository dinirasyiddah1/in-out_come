<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <div id="form">
        <div id="rad">
            <input type="radio" name="a" value="3"> 3
            <input type="radio" name="a" value="2"> 2
            <br>
            <input type="radio" name="b" value="3"> a
            <input type="radio" name="b" value="2"> b
        </div>
    </div>
    <button id="tambah-hal" type="button" onclick="myFunction()" name="tambah" >Tambah halaman</button>
    
    <script>
    function myFunction(){
        var rad = document.getElementById("rad");
        var clone = rad.cloneNode(true);
        document.getElementById("form").appendChild(clone);
    }
    </script>
    
</body>
</html>