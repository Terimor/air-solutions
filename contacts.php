<?php include('components/headerLanding.php'); ?>
<section class="banner-section dark-27">
    <div class="container">
        <div class="header-title text-center">
            <h2 class="title">Контактные данные</h2>
            <span class="sub-title">Главная &gt; <span>Контакты</span></span>
            <div class="mouse hidden-xs wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                <div class="mouse-icon">
                    <div class="wheel"></div>
                </div>
            </div>
        </div> <!-- header-title -->
    </div>
</section>
<section class="contact-section">
    <div class="contact-section-one">
        <div class="container">
            <div class="section-one-wrapper">
                <div class="row">
                    <h3>Контактные данные нашего центра</h3>
                    <div class="col-md-7 section-left">
                        <div class="contact-wrapper">
                            <p>Мы убеждены, что коммуникация является одним из ключевых инструментов успеха в нашем деле. Выберите отдел, и мы обязательно ответим вам в кратчайшие сроки.</p>
                            <ul class="location">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="content">
                                        <span class="text"><strong>Адрес нашего офиса:</strong> <br>Россия, 123317, Москва, <br> Пресненская набережная 12, Корпус 2, этаж 12, офис 37</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span class="text">+35 (894) 272 34 32<i style="font-size:  15px;padding: 5px;color: #7d818a;">(ПН-ПТ: 9:00 - 21:00 по МСК)</i></span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span class="text">support@airsolutionsgroup.club</span>
                                </li>
                            </ul>
                        </div> <!-- contact-wrapper -->
                    </div>
                    <div class="col-md-5">
                        <h3>Форма обратной связи </h3>
                        <div class="contact-wrapper">
                            <div class="contact-form" id="form_3">
                                <div class="form-group">
                                    <input id="contactName" type="text" class="form-control" required="" name="name_3" placeholder="Ваше имя">
                                </div>
                                <div class="form-group">
                                    <input id="contactEmail" class="contactSearchBar" value="Email" onblur="if(this.value=='')this.value='Email'" onfocus="if(this.value=='Email')this.value=''" name="email_3" required="" type="email">
                                </div>
                                <div class="form-group">
                                    <input id="contactPhone" type="phone" class="form-control" required="" name="phone_3" placeholder="Номер телефона">
                                </div>
                                <div class="form-group">
                                    <textarea id="contactMessage" class="form-control" required="" name="message_3" placeholder="Ваше сообщение" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <p id="successContactUs" style="display: none">Спасибо. Мы свяжемся с Вами в ближайшее время.</p>
                                    <button id="contactButtonSubmit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<?php include('components/footerLanding.php'); ?>