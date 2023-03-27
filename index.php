<?php
    require_once 'connect.php';
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Рекламное агентство Nikita</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      header {
        background-color: #333;
          text-align: center;
        color: #fff;
        padding: 20px;
      }
      h1 {
        margin: 0;
      }
      nav {
        background-color: #ccc;
        padding: 10px;
        text-align: center;
      }
      nav a {
        color: #333;
        text-decoration: none;
        padding: 10px;
        margin-right: 10px;
        border-radius: 5px;
        background-color: #fff;
        transition: background-color 0.3s;
      }
      nav a:hover {
        background-color: #333;
        color: #fff;
      }
      section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
      }
      .card {
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        border-radius: 5px;
        padding: 5px;
        width: 30%;
      }
      .card img {
        max-width: 100%;
        height: auto;
      }
      .card h2 {
        margin-top: 0;
        font-size: 24px;
      }
      .card p {
        margin: 10px 0;
        font-size: 16px;
      }
      footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        }
        .form{
            text-align: center;
            margin: 10px 40%;
        }
    </style>
  </head>
  <body>
    <header>
      <h1>Рекламное агентство Nikita</h1>
    </header>
    <nav>
      <a href="index.php">Главная</a>
      <a href="Услуги.php">Услуги</a>
      <a href="портфолио.php">Портфолио</a>
      
    </nav>
    <section>
      <div class="card">
        <img src="photo/реклкомп.png" alt="Рекламная кампания">
        <h2>Рекламная кампания</h2>
        <p>Мы разработаем для вас эффективную рекламную кампанию, которая поможет привлечь новых клиентов и увеличить продажи.</p>
      </div>
      <div class="card">
        <img src="photo/лого.png" alt="Дизайн логотипа">
        <h2>Дизайн логотипа</h2>
        <p>Мы создадим для вас уникальный и запоминающийся логотип, который поможет выделиться на рынке и привлечь внимание потенциальных клиентов.</p>
      </div>
      <div class="card">
        <img src="photo/сайт.png" alt="Разработка сайта">
        <h2>Разработка сайта</h2>
        <p>Мы разработаем для вас современный и удобный сайт, который поможет привлечь новых клиентов и увеличить продажи.</p>
        </div>
        <div class="form">
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
            </div>
       
    </section>
    <footer>
      <p>© Рекламное агентство Nikita, 2023</p>
    </footer>
  </body>
</html>