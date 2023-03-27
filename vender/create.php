<?php

require_once '../connect.php';

$FIO = $_POST['FIO'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$komment = $_POST['komment'];

$query = "INSERT INTO `agent` (`id`, `FIO`, `Email`, `Mobile`, `komment`) VALUES (NULL, '$FIO', '$Email', '$Mobile', '$komment')";

mysql_query($query);

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            header{
                text-align: center;
            }
            .txt{
                margin-top: 100px;
            }
            .sil{
                background-color: black;
                color: white;
                padding: 10px;
                
            }
            
        </style>
    </head>
    <body>
        <header>
            
                <div class="txt">Заявка успешно отправлена!</div>
                <br>
                <div class="txt">
                    <a  href="../index.php" class="sil">Вернуться назад</a></div>
            
        </header>
    </body>
</html>