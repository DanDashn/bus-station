<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/sliderstyle.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <title>Автовокзал</title>
</head>
<body>
    <div class="header-menu-container">
        <div  class="header-menu-container-cener-box">
            <div>
                <a href="tel:+7-977-442-50-03">+7-977-442-50-03</a>
            </div>
            <div>
                <a href="mailto:aleqsanyandaniel@gmail.com">Написать нам</a>
            </div>
            <div>
                <a href="#">Мои броны</a>
            </div>
        </div>
    </div>
    <div class="main-contaner">
        <div class="zagolovok">
            <h1>Билеты на автобус</h1>
            <p>Бронируйте билеты на автобус по Московской области</p>
        </div>
    </div>
    <div class="slider">
        <div class="item">
            <img src="imges/myslide1.jpeg" alt="Первый слайд">
            <div class="slideText">Вы будете в надежных руках</div>
        </div>
    
        <div class="item">
            <img src="imges/dopslie2.jpg" alt="Второй слайд">
            <div class="slideText"> Почувствуете комфорт</div>
        </div>
    
        <div class="item">
            <img src="imges/voditel-avtobusa.jpg" alt="Третий слайд">
            <div class="slideText">с вами будут опытные водители</div>
        </div>
    
        <a class="prev" onclick="minusSlide()">&#10094;</a>
        <a class="next" onclick="plusSlide()">&#10095;</a>
    </div>
    
    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
    </div>
    <div>
        <div class="form-container">
            <div class="form">
                <select name="cities" id="11">
                    <option value="0">Откуда</option>
                <?php
                   
            $cities = mysqli_query($ns_handler, "SELECT * FROM city");

            $cities= mysqli_fetch_all($cities);
            
            foreach ($cities as $city) {
            ?>
                    <option value="<?= $city[0] ?>"><?= $city[1] ?></option>
                    <?php
            }
            ?>
                </select>
                <select name="cities2" id="22">
                    <option value="0">куда</option>
                    <?php
                foreach ($cities as $city) {
            ?>
                    <option value="<?= $city[0] ?>"><?= $city[1] ?></option>
                    <?php
            }
            
            ?>
                </select>
                <select name="pass" id="pass">
                    <option value="1">1 пассажир</option>
                    <option value="2">2 пассажира</option>
                    <option value="3">3 пассажира</option>
                    <option value="4">4 пассажира</option>

                </select>
                <input name="data" type="date" class="data" value="" min="2022-06-01" max="2022-06-30">
                <select  class="vremyavazm" name="vremyavazm">
                    <option value="1">08:00</option>
                    <option value="2">11:50</option>
                    <option value="3">13:40</option>
                    <option value="4">17:00</option>    
                    <option value="4">20:00</option>
                </select>
                <input class="direction-submit" type="submit" value="Далее">
            </div>
        </div>
    </div>
    <div>
        <div class="result-form-container" >
            <div class="result-form-insert-container">
                <div class="result-form">
                    <input  class="name" name="name" type="text" value="" placeholder="Ваше имя">
                    <input  class="surname" name="urname" type="text" value=""  placeholder="Ваша фамилия">
                    <input  class="otchestvo" name="otchestvo" type="text" value=""  placeholder="Ваше Отчество">
                    <input class="phone" name="phone" type="tel" placeholder="+7(___) ___-__-__" >
                    <select class="class-mesta" name="class-mesta" id="">
                        <option value="1">эконом</option>
                        <option value="2">стандарт</option>
                        <option value="2">комфорт</option>
                        <option value="2">бизнес</option>
                    <input  class="submit"type="submit">
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script>
        $(function(){
            //$('.data').val(new Date().toLocaleDateString());
            $('[name="cities"]').on("change", function() {
                var $target = $('[name="cities"]');
                var thisValue = $(this).val();
                var mixcity2Select = document.getElementById("22"),
                mixcity2 = mixcity2Select.children,
                mixcity2Len = mixcity2.length;
                for (var i = 0;  i < mixcity2Len; i++){
                    var city2txt = mixcity2[i];
                    var val = mixcity2[i].value;
                    city2txt.removeAttribute('disabled')
                    if (thisValue == city2txt.value){
                        city2txt.setAttribute("disabled", "disabled");
                    }              
                }
            });
            $('[name="cities2"]').on("change", function() {
                var $target2 = $('[name="cities2"]');
                var thisValue2 = $(this).val();
                var $target2 = $('[name="cities2"]');
                var mixcity1Select = document.getElementById("11"),
                mixcity1 = mixcity1Select.children,
                mixcity1Len = mixcity1.length;
                for (var i = 0;  i < mixcity1Len; i++){
                    var city1txt = mixcity1[i];
                    //console.log(mixcity1[0].setAttribute("disabled", "disabled"));
                    var val = mixcity1[i].value;
                    city1txt.removeAttribute('disabled');
                   if (thisValue2 == city1txt.value){
                       city1txt.setAttribute("disabled", "disabled");
                    }              
                }
            });
            $('#11').click(function(){
                var city1option0 = document.getElementById("11").children[0];
                city1option0.setAttribute("disabled", "disabled");
                console.log(city1option0);
            });
            $('#22').click(function(){
                var city2option0 = document.getElementById("22").children[0];
                city2option0.setAttribute("disabled", "disabled");
                console.log(city2option0);
            });
            $('input.direction-submit').click(function(){
                var otkudavalue = $('select#11').find(":selected").val();
                var kudavalue = $('select#22').find(":selected").val();
                //alert(otkudavalue + ' '+ kudavalue);
                if((otkudavalue == 0) && (kudavalue == 0)) {
                    $('form').attr('action','');
                    return alert("Вы не указали откуда куда хотите ехать : ( \nВыбиерте города.")
                }
                else if((otkudavalue == 0) && (kudavalue > 0)) {
                    $('form').attr('action','');
                    return alert("Вы не указали откуда хотите ехать : ( \nВыбиерте город.")
                }
                else if ((otkudavalue > 0) && (kudavalue == 0)){
                    $('form').attr('action','');
                    return alert("Вы не указали куда хотите ехать : ( \nВыбиерте город.")
                }
                else{
                    var otkudacity1 = $('select#11').find(":selected").text();
                    var kudacity2 = $('select#22').find(":selected").text();
                    var kolpass = $('select#pass').find(":selected").text();
                    var date = new Date($('input[type="date"]').val());
                    var timeval =  $('select.vremyavazm').find(":selected").text();
                    var yearval = date.getFullYear();
                    var monthval = date.getMonth() +1; 
                    var dayval = date.getDate();
                    console.log( yearval +" : " + monthval + " : " + dayval + ' | ' + timeval)//робит
                    let directionbool = confirm('Вы хотие купить билет на рейс '+  otkudacity1 + '- '+ kudacity2 +'?');
                    if(directionbool){
                        $('.result-form').css('display', 'grid');
                        //alert(otkudacity1 + ' '+ kudacity2 + ' '+ kolpass + '   ' + dayval + ' ' + monthval + ' ' + yearval);
                        $('input.submit').click(function(){
                            var nameValue = $('input.name').val();
                            var surnameValue = $('input.surname').val();
                            var otchestvoValue = $('input.otchestvo').val();
                            var phoneValue = $('input.phone').val();
                            var classValue = $('select.class-mesta').find(":selected").text();
                            alert(otkudacity1 + ' '+ kudacity2 + ' ' + dayval + '-' + monthval + '-' + yearval + ' '+ timeval + ' ' + nameValue + ' '+ surnameValue + ' '+ otchestvoValue + ' ' + phoneValue );


                            $.ajax({
                                method: "POST",
                                url: "obrabotchik.php",
                                data:{ city1: otkudacity1, city2: kudacity2, year: yearval, month: monthval, day: dayval, pass: kolpass, name: nameValue, class: classValue, surname: surnameValue, otchestvo: otchestvoValue, time: timeval, phone: phoneValue},
                                success: function (response) {
                                 $(location).attr('href','search-results.php');
                                }
                            })
                        });
                    }
                    else{
                        alert('Жаль, что вы передумали ! \n Всегда ждем вас :) ')
                    };
                };
            });
        });
    </script>
        <script>
  [].forEach.call(document.querySelectorAll('input[type="tel"]'), function (input) {
    let keyCode;
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      let pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      let matrix = '+7 (___) ___-__-__',
        i = 0,
        def = matrix.replace(/\D/g, ''),
        val = this.value.replace(/\D/g, ''),
        new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a
        });
      i = new_value.indexOf('_');
      if (i != -1) {
        i < 5 && (i = 3);
        new_value = new_value.slice(0, i)
      }
      var reg = matrix.substr(0, this.value.length).replace(/_+/g,
        function (a) {
          return '\\d{1,' + a.length + '}'
        }).replace(/[+()]/g, '\\$&');
      reg = new RegExp('^' + reg + '$');
      if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
      if (event.type == 'blur' && this.value.length < 5) this.value = ''
    }
    input.addEventListener('input', mask, false);
    input.addEventListener('focus', mask, false);
    input.addEventListener('blur', mask, false);
    input.addEventListener('keydown', mask, false);
  });
</script>
</body>
</html>