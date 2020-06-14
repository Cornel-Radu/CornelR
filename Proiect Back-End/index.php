<?php 
    include_once 'connection.php';

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cars Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <h1>Adauga anunt</h1>
                </div>
                <div class="row">
                    <div class="form-group col p-2">
                        <label for="marcaMasina">Marca:</label>
                        <select class="form-control" name="marca" id="marca">
                            <option class="active" value="default">Alege Marca</option>
                            <option>Audi</option>
                            <option>Reanault</option>
                            <option>VW</option>
                            <option>Opel</option>
                            <option>Mercedes</option>
                            <option>Ford</option>
                        </select>
                    </div>
                    <div class="form-group col p-2">
                        <label for="modelMasina">Model:</label>
                        <select class="form-control" name="model" id="model">
                            <option class="active" value="default">Alege Modelul</option>
                            <option>A4</option>
                            <option>A5</option>
                            <option>A8</option>
                            <option>Megane</option>
                            <option>Clio</option>
                            <option>Fluence</option>
                            <option>Golf</option>
                            <option>Polo</option>
                            <option>Pasat</option>
                            <option>Astra</option>
                            <option>Corsa</option>
                            <option>Tigra</option>
                            <option>A Class</option>
                            <option>C Class</option>
                            <option>S Class</option>
                            <option>Focus</option>
                            <option>Fiesta</option>
                            <option>Ranger</option>
                        </select>
                    </div>
                    <div class="form-group col p-2">
                        <label for="pretMasina">Pret:</label>
                        <input type="text" name="pret" class="form-control" id="pret" placeholder="ex: 2000">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Descriere">Descriere:</label>
                    <textarea class="form-control" name="descriere" id="descriere" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="imaginiMasina">Adaugare imagini:</label>
                    <div class="input-group p-1">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Chose Files <input id="imgInp" type="file" class="" name="filename" onchange="$('#myFile').val($(this).val());" />
                            </span>
                        </span>
                        <input type="text" id="myFile" class="form-control" placeholder="Upload Images" readonly>
                    </div>
                    <img id="img-upload" src="#" alt="" />
                </div>
                <div class="text-right"><button type="submit" name="submit" value="upload" class="btn btn-light my-1" id="save">Salveaza si continua</button>
                </div>

            </div>
        </form> 
        <script src="main.js"></script>
    </body>
</html>

?>