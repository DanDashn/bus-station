<?php
    require_once 'connection.php';
    $flightes = mysqli_query($ns_handler,"SELECT * from passenger");
    $flightes= mysqli_fetch_all($flightes);
    foreach ($flightes as $flight) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css//form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автовокзал поиск</title>
</head>
<body>
    <div class="back-link-block">
        <a href="index.php">Назад</a>
    </div>
    <div class="search-result-form-container">
        <div class="search-result-form">
            <div class="head" >
                <h2>Бронирование билетов</h2>
            </div>
            <input class="box1" type="text" value="Рейс" disabled><input class="box2" type="text" value="<?= $flight[7] ?>" disabled>
            <input class="time" type="text" value="Номер рейса" disabled><input type="text" value="<?= $flight[0] ?>" disabled>
            <input class="box2" type="text" value="Дата и время " disabled><input type="text" value="<?= $flight[8] ?>   <?= $flight[9] ?>" disabled>
            <input class="time" type="text" value="Количество поссажиров" disabled><input type="text" value="<?= $flight[6] ?>">
            <input class="time" type="text" value="ФИО" disabled><input type="text" value="<?= $flight[2] ?> <?= $flight[1] ?> <?= $flight[3] ?>" disabled>
            <input class="time" type="" value="Телефон" disabled><input type="text" value="<?= $flight[4] ?>" disabled>
            <input class="time" type="text" value="класс места" disabled><input type="text" value="<?= $flight[5] ?>" disabled>
            <div class="search-res-submit-cont">
                <input class="search-res-submit" type="submit" value="Забронировать">
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.search-res-submit').click(function(){
                confirm('Вы только что забронировали билет на автобус \nНе забудьте заскринить чек, чтоб потом оплатить в течение 30 мин.')
                alert('Спасибо, что воспользовались нашим сервисом : )\nХорошего дня вам !')
                $(location).attr('href',"index.php");
            })
        })
    </script>
</body>
</html>
