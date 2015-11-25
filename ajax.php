    <?


    ini_set('memory_limit', '64M');



    /*$FORMAT = $_REQUEST['format'];*/
    $JSON_RESULT = array();
    $fh = fopen("1234.txt", "a");
    foreach (getallheaders() as $name => $value) {
        fwrite($fh, $name . ' : ' . $value . PHP_EOL);
    }
    ;
    foreach ($_REQUEST as $name => $value) {
        fwrite($fh, $name . ' : ' . $value . PHP_EOL);
    }
    ;
    fwrite($fh, PHP_EOL);

    fclose($fh);
    $H = getenv("HTTP_REFERER");
    $numberphone = $_POST['numberphone'];
    $captcha = $_POST['captcha'];
    $ref = $_POST['ref'];
    if (substr($numberphone, 0, 1) == '+') {
        $numberphone = substr($numberphone, 1, 12);
    }
    ;
    $captcha = $_POST['captcha'];



    if (substr($numberphone, 0, 3) !== '375')
    {
        if(substr($numberphone, 3, 2) == '29')
        {



        ?>

    <script src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <div class="newpop pop1">
        <div class="container pop-wrap2">
            <div class="pop-logo2">Ошибка!</div>
            <div class="close close1"></div>
            <div class="text-popup" id="text-group">
                <p class="firstP" id="text1">Что - то пошло не так </p>
                <br/>
                <br/>
                <br/>
                <p class="secondP" id="text2">Попробуйте еще раз.</p>
                <p class="secondP" id="text3">Внимательно проверьте формат номера вашего мобильного телефона.</p>
            </div>


            <div class="window">
                <a href="#" class="close5">
                    <button id="popbutton" type="submit" onclick="close()" class="myclass  btn2 btn-1 btn-1a close1">
                        OK
                    </button>
                </a>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#sendButton').click(function () {
                    $('.newpop').show();
                    return false;
                });
                $('.close1').click(function () {
                    $('.newpop').hide();
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".close5").click(function () {
                    $(".newpop").css({'display': 'none'});
                    return false;
                });
            });
        </script>
    </div>


<? }
        }




    else {
    if ($captcha !== 'WELTERED') { ?>

        <script src="js/modernizr.custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <div class="newpop2 pop1 " style="font-size: 30px">
            <div class="container pop-wrap2" style="font-size: 30px">
                <div class="pop-logo2" style="font-size: 30px">Ошибка!</div>
                <div class="close close1"></div>
                <div class="text-popup"  id="text-group2">
                    <br/><br/><br/>
                    <p class="firstP pop-text" id="text4">Что - то пошло не так.</p>
                    <br/>

                    <p class="secondP" id="text5">Попробуйте еще раз.</p>

                    <p class="secondP" id="text6">Внимательно проверьте защитный код.</p>
                    </div>


                <div class="window">
                    <a href="#" class="close5">
                        <button id="popbutton" type="submit" onclick="close()"
                                class="myclass  btn2 btn-1 btn-1a close1">OK
                        </button>
                    </a>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#sendButton').click(function () {
                        $('.newpop2').show();
                        return false;
                    });
                    $('.close1').click(function () {
                        $('.newpop2').hide();
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $(".close5").click(function () {
                        $(".newpop2").css({'display': 'none'});
                        return false;
                    });
                });
            </script>
        </div>



    <?
    } else {
        file_get_contents("http://api.itv.by/xml.php?request=CreataActionSmartUser&usrSource=ITV_SMART_Action&usrNumber=" . $numberphone . "&referer=" . $ref);

        ?>
        <script src="js/modernizr.custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <div class="newpop3 pop1">
            <div class="container pop-wrap2">

                <div class="pop-logo2">Cпасибо!</div>
                <div class="close close1"></div>
                <div class="text-popup2"  id="text-group3">


                    <p class="secondP" id="text11">Заявка принята.</p>


                    <p class="secondP" id="text9">Через несколько минут на номер
                        указанного мобильного телефона придет пароль к приложению ITV.</p>

                    <br/>
                    <p class="secondP" id="text10">Приятного просмотра!</p>
                </div>


                <div class="window">
                    <a href="#" class="close5">
                        <button id="popbutton" type="submit" onclick="close()"
                                class="myclass  btn2 btn-1 btn-1a close1">OK
                        </button>
                    </a>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#sendButton').click(function () {
                        $('.newpop3').show();
                        return false;
                    });
                    $('.close1').click(function () {
                        $('.newpop3').hide();
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $(".close5").click(function () {
                        $(".newpop3").css({'display': 'none'});
                        return false;
                    });
                });
            </script>
        </div>
    <?
    }
}


