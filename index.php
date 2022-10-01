<?php

if(isset($_FILES['imagen']['name'])){
    if(move_uploaded_file($_FILES['imagen']['tmp_name'],"imag/".$_FILES['imagen']['name'])){
        $img = $_FILES['imagen']['name'];
        echo "Tu archivo esta <a href='imag/$img'>aqui</a>";
    }else{
        echo "Hubo un error al subir el archivo, verifica si existe la carpeta en donde se almacena el archivo.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body{
            background: rgb(0, 0, 0);
        }
        header{
            text-align: center;
        }
        #container{
            width: 90%;
            height: auto;
            text-align: center;
            border-radius: 10px;
            margin-top: 6px;
            background: rgb(255, 255, 255);
        }
    </style>
    <title>Upload File</title>
</head>
<body>
    <div class="container" id="container">
        <header>
            <h1>Upload File</h1>
        </header>
        <hr style="background: rgb(63, 63, 63); height: 5px; border-radius: 10px;">
        <div class="mb-3">
            <form action="" enctype="multipart/form-data" method="post">
                <label for="formFile" class="form-label">Upload File</label>
                <input class="form-control" type="file" id="formFile" name="imagen">
                <input type="submit" class="btn btn-primary" value="Subir archivo">
            </form>
        </div>
    </div>
</body>
</html>
