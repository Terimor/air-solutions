<footer class="footer-section">
    <div class="container">
        <div class="footer-part">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <div class="footer-wrapper">
                        <span class="footer-logo"><img style="width: 275px;" src="img/startwhitelogo.png" alt="image"></span>
                        <p>Мы — компания, которая инвестирует в будущее. мы помогаем своим клиентам воплощать их мечты в реальность. AirSolutions Group создано инвесторами <a href="about.php">Читать подробнее...</a></p>
                        <div class="number-time">
                            <h3>+35 (894) 272 34 32 </h3>
                            <ul class="time-part">
                                <li><span>ПН - ПТ</span>: 9:00 - 21:00 по МСК </li>
                                <li><span>СБ - ВС</span>: свободный график</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="footer-wrapper">
                        <h3>Навигация</h3>
                        <ul class="page-link">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О компании</a></li>
                            <li><a href="business_model.php">Бизнес-модель</a></li>
                            <li><a href="faq.php"> F.A.Q.</a></li>
                            <li><a href="contacts.php">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="footer-wrapper">
                        <h3>Посчитайте свою прибыль</h3>
                        <form class="footer-form form-horizontal">
                            <div class="form-group">
                                <a href="#" data-toggle="modal" data-target=".modal3" class="btn btn-primary pull-right"><i class="fa fa-calculator" aria-hidden="true"></i> Калькулятор доходности</a>
                            </div>
                        </form>
                        <h3 class="social-title">Мы в соц.сетях:</h3>
                        <ul class="social2-media">
                            <li><a class="vk" target="_blank" href="https://vk.com/airsolutionsgroup"><i class="ei-vk" aria-hidden="true"></i></a></li>
                            <li><a class="telegram" target="_blank" href="https://t.me/airsolutionsgroup"><i class="ei-telegram" aria-hidden="true"></i></a></li>
                            <li><a class="youtube" target="_blank" href="https://www.youtube.com/airsolutionsgroup"><i class="ei-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- footer-one -->
    </div>

    <div class="copyright-section">
        <div class="container">
            <p class="inline-block">2020 © Все права защищены. <span><a href="#">AirSolution Group</a></span></p>
            <ul class="pull-right">
                <li><a href="index.php">Главная</a></li>
                <li><a href="https://cabinet.airsolutions.club/#/sign-up">Личный кабинет</a></li>
                <li><a href="rules.php">Клиентское соглашение</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span> -->
<div id="offcanvas-menu" class="visible-xs visible-sm">
    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>
    <ul class="menu-wrapper">
        <li class="active"><a href="index.php"><i class="fa fa-home"></i> Главная</a>
        </li>
        <li class=""><a href="about.php"><i class="fa fa-briefcase"></i> О компании</a></li>
        <li class=""><a href="business_model.php"><i class="fa fa-paperclip"></i> Бизнес-модель</a></li>
        <li class=""><a href="faq.php"><i class="fa fa-list-alt"></i> F.A.Q.</a>
        </li>
        <li class=""><a href="contacts.php"><i class="fa fa-envelope-o"></i> Контакты</a>
        </li>
        <li> <a style="margin-top:22px; color:white;" class="btn btn-primary" href="https://cabinet.airsolutions.club/#/sign-up"><i class="fa fa-lock" aria-hidden="true"></i> Вход / Регистрация</a> </li>
    </ul> <!-- menu-wrapper -->
</div>
<div id="toTop" class="hidden-xs" style="display: block;">
    <i class="fa fa-chevron-up"></i>
</div>
<div class="fusion-modal modal fade modal-4 modal3 in" tabindex="-1" role="dialog" aria-labelledby="modal-heading-4" aria-hidden="false" style="display: none;">
    <style type="text/css">
        .modal-4 .modal-header,
        .modal-4 .modal-footer {
            border-color: #ebebeb
        }
    </style>
    <div class="modal-dialog modal-lg">
        <div class="modal-content fusion-modal-content">
            <div class="modal-header"><button style="background: none;" class="close" type="buttonclose" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h3 style="font-size: 17px;font-weight: 400;line-height: 1;" class="modal-title" id="modal-heading-4" data-dismiss="modal" aria-hidden="true" data-fontsize="17" data-lineheight="36">Калькулятор прибыли</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <p style="font-family: 'Roboto', sans-serif;text-align: center;font-size: 22px;font-weight: 300;color: rgb(66, 61, 61);margin-bottom: 15px;">
                            Выберите тарифный план:</p>
                        <div align="center">
                            <form id="calc">
                                <div class="animated fadeInLeft">
                                    <div id="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default active" id="option1" data-toggle="tab" data-target="#depo1">
                                            <input type="radio" name="options" value="14" onClick="checkType(this)"> Депозит на 14 дней
                                        </label>
                                        <label class="btn btn-default" id="option2" data-toggle="tab" data-target="#depo7">
                                            <input type="radio" name="options" value="30" onClick="checkType(this)"> Депозит на 30 дней
                                        </label>
                                        <label class="btn btn-default" id="option3" data-toggle="tab" data-target="#depo14">
                                            <input type="radio" name="options" value="45" onClick="checkType(this)"> Депозит на 45 дней
                                        </label>
                                        <label class="btn btn-default" id="option3" data-toggle="tab" data-target="#depo28">
                                            <input type="radio" name="options"> Депозит на 60 дней
                                        </label>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div align="center">
                            <div class="animated fadeInLeft"> <i class="mdl fa fa-long-arrow-right"></i> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p style="font-family: 'Roboto', sans-serif;text-align: center;font-size: 22px;font-weight: 300;color: rgb(66, 61, 61);margin-bottom: 15px;">Ваш доход от депозита:</p>
                        <div class="animated fadeInRight">
                            <div align="center">
                                <div style="-webkit-box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.075);
                                            -moz-box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.075);
                                            box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.075);
                                            background-color: #fff;
                                            background-clip: border-box;
                                            border: 1px solid rgba(0, 0, 0, 0.125);
                                            border-radius: 0.25rem;
                                            padding-bottom: 46px;" class="tab-content">
                                    <div class="tab-pane fade in active" id="depo1">
                                        <div class="fusion-separator sep-single" style="/* border-color:#cdcdcd; *//* border-top: 1px dotted #d7d7d7; */ margin-top:5px;margin-bottom:17px;width:100%;max-width:820px;"><span class="icon-wrapper" style="border-color:#cdcdcd;"><i class="fa fa-chevron-down" style="color:#cdcdcd;"></i></span></div>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Введите сумму Вашей инвестиции:</p>

                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input autofocus="" class="form-control" type="number" min="100" max="1000000" size="10" id="plan1def" value="0.00" oninput="var v = this.value; push(event, 'plan1def', 'plan1')">
                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <p></p>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Через 14 дней Ваш заработок составит:<br></p>
                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <script>
                                                function push(e, defName, endName) {
                                                    e.preventDefault();
                                                    var val = document.getElementById(defName).value;
                                                    switch (defName) {
                                                        case 'plan1def':
                                                            document.getElementById(endName).value = (val * 0.015 * 14).toFixed(2);
                                                            break;
                                                        case 'plan7def':
                                                            document.getElementById(endName).value = (val * 0.02 * 30).toFixed(2);
                                                            break;
                                                        case 'plan14def':
                                                            document.getElementById(endName).value = (val * 0.025 * 45).toFixed(2);
                                                            break;
                                                        case 'plan28def':
                                                            document.getElementById(endName).value = (val * 0.03 * 60).toFixed(2);
                                                            break;
                                                    
                                                        default:
                                                            break;
                                                    }
                                                    return false;
                                                }
                                            </script>
                                            <input class="form-control" type="number" disabled="disabled" id="plan1" name="plan1" size="10" maxlength="10" value="0.00" min="100"><span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="depo7">
                                        <div class="fusion-separator sep-single" style="/* border-color:#cdcdcd; *//* border-top: 1px dotted #d7d7d7; */ margin-top:5px;margin-bottom:17px;width:100%;max-width:820px;"><span class="icon-wrapper" style="border-color:#cdcdcd;"><i class="fa fa-chevron-down" style="color:#cdcdcd;"></i></span></div>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Введите сумму Вашей инвестиции:</p>

                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" min="100" max="1000000" size="10" value="0.00"  id="plan7def" oninput="var v = this.value; push(event, 'plan7def', 'plan7')">
                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <p></p>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Через 30 дней Ваш заработок составит:<br></p>
                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" disabled="disabled" name="plan7" id="plan7" size="10" maxlength="10" value="0.00" min="100"><span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="depo14">
                                        <div class="fusion-separator sep-single" style="/* border-color:#cdcdcd; *//* border-top: 1px dotted #d7d7d7; */ margin-top:5px;margin-bottom:17px;width:100%;max-width:820px;"><span class="icon-wrapper" style="border-color:#cdcdcd;"><i class="fa fa-chevron-down" style="color:#cdcdcd;"></i></span></div>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Введите сумму Вашей инвестиции:</p>

                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" min="100" max="1000000" size="10" value="0.00" id="plan14def" oninput="var v = this.value; push(event, 'plan14def', 'plan14')">
                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <p></p>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Через 45 дней Ваш заработок составит:<br></p>
                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" disabled="disabled" name="plan14" size="10" id="plan14" maxlength="10" min="100" value="0.00"><span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="depo28">
                                        <div class="fusion-separator sep-single" style="/* border-color:#cdcdcd; *//* border-top: 1px dotted #d7d7d7; */ margin-top:5px;margin-bottom:17px;width:100%;max-width:820px;"><span class="icon-wrapper" style="border-color:#cdcdcd;"><i class="fa fa-chevron-down" style="color:#cdcdcd;"></i></span></div>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Введите сумму Вашей инвестиции:</p>

                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" min="100" max="1000000" size="10" value="0.00" id="plan28def" oninput="var v = this.value; push(event, 'plan28def', 'plan28')">
                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <p></p>
                                        <p style="font-family: 'Open Sans', sans-serif;text-align: center;font-weight: 400;font-size: 17px;margin-bottom: 16px;color: #333;">Через 60 дней Ваш заработок составит:<br></p>
                                        <div style="max-width: 150px;" class="input-group m-t-5">
                                            <input class="form-control" type="number" disabled="disabled" name="plan28" size="10" min="100" value="0.00" id="plan28" maxlength="10"><span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <div align="col-md-12">
                    <div align="center">

                        <a style="white-space: normal;" target="_blank" href="#" class="btn btn-primary btn-rounded waves-effect waves-light animated bounceIn"><i class="fa fa-hand-o-right"></i> ПЕРЕЙТИ К ПОПОЛНЕНИЮ БАЛАНСА </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script src="js/YT/jquery.mb.YTPlayer.js"></script>
<script src="js/YT/jquery.mb.YTPlayer.min.js"></script>
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="styles/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- inview -->
<script src="js/jquery.inview.min.js"></script>
<!-- WOW -->
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>
<!-- Lightbox -->
<script src="js/lightbox.js"></script>
<script src="js/owl-carrosel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      $(document).ready(function() {
      emailjs.init("user_h1pqEqKiVUD1zsuXPjKGk");
                                    $('#contactButtonSubmit').on('click', async function() {
                                        const name = $('#contactName').val();
                                        const email = $('#contactEmail').val();
                                        const phone = $('#contactPhone').val();
                                        const message = $('#contactMessage').val();

                                        const template_params = {
                                            name,
                                            email,
                                            phone,
                                            message
                                        };

                                        await emailjs.send("smtp_server", "landing_contact_form", template_params, 'user_h1pqEqKiVUD1zsuXPjKGk');
                                        $('#successContactUs').css('display', 'block');
                                    });
                                })
      
   })();
</script>
</body>

</html>