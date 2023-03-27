<?php
    require_once 'connect.php';
?>

<html>
<head>
    <title>
        Advertising agency
    </title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    
    th {
        background: #606060;
    }
    
    td {
        background: #5b5b5b;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>FIO</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>komment</th>
        </tr>
        
        <?php
            $query = "SELECT * FROM `agent`";
            $products = mysqli_query($connect, $query); 
            var_dump($products);
            $products = mysqli_fetch_all($products);

            foreach ($products as $product) {
                ?>
                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[2] ?></td>
                    <td><?= $product[3] ?></td>
                    <td><?= $product[4] ?></td>
                </tr>
                
                <?php
            }
        ?>
    </table>
<form action="vender/create.php" method="post">
<fieldset>
<legend>Заявка на покупку рекламы</legend>
<br>
<div><input name="FIO" type="text" placeholder="Ваше имя">
<p></p>
<input name="Email" type="email" placeholder="Электронная почта">
<p></p>
<input name="Mobile" type="tel"  placeholder="Номер телефона">
<p></p>
</div>
<div>
<textarea name="komment" type="text" placeholder="Комментарий к заказу"></textarea>
<p></p>
</div>  
<input type="submit" value="Отправить" id="input-submit">
</fieldset>
</form>
    
    
    
    
    
    
</body>
</html>