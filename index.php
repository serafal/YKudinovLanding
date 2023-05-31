<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans+Caption&family=Tinos&display=swap" rel="stylesheet">
    <title>Document</title>
    <!-- PHP connect settings --> 
    <?php
    require_once 'setting.php';
    $connection = new mysqli($host, $user, $pass, $data);
    if ($connection->connect_error) die ('Error connection');
    ?>
    <!--PHP connect settings-->
</head>
<body>
    <!-- header -->
    <header>
        <div class="header-top">
            <div class = "container">
                <div id="menu-to-open" class="mobyle menu-to-open" onclick="menu_open()"><img src="./img/menu-to-open.png" alt=""></div>
                <div id="menu-to-close" class="mobyle menu-to-close"  onclick="menu_close()"><img src="./img/menu-to-close.png" alt=""></div>
                <div class = "logo-svg">
                    <img src="./img/LOGO-green.png" alt="">
                </div>
                <div class = "adress">
                    <div class="adress-top"> 
                        <img src="./img/Vector.png" alt="">
                        <div class="mobyle phone-number-mobyle"><span>+7(863) 000 00 00</span></div>
                        <p>Ростов-на-Дону</p>
                    </div>
                    <div class="adress-bottom">
                        <p>ул. Ленина, 2Б</p>
                    </div>
                </div>
                <div class = "phone-number">
                    <img src="./img/WhatsApp.png" alt="" class="social-logo">
                    <a href="@">+7(863)000 00 00</a>
                </div>
                <button class = "green-button desktop" onclick="feedbackFormOpen()">Записаться на приём</button>
            </div>
        </div>
        <nav class="header-nav" id="headerNav">
            <div class = "container">
                <a href="@">О клинике</a>
                <a href="@">Услуги</a>
                <a href="@">Специалисты</a>
                <a href="@">Цены</a>
                <a href="@">Контакты</a>
                <button class="white-button mobyle" onclick="feedbackFormOpen()">Записаться на приём</button>
            </div>
            
        </nav>
    </header>
    <!-- header -->

    <!-- main-one  -->
    <div class = "div-one">
        <div class = "container">
            <div class = "div-one-text">
                <div class="div-one-text-inner">
                    <h1>Многопрофильная клиника для детей и взрослых</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>
            <div class = "div-one-img">
                <img src="./img/photo-1.jpg" alt="">
            </div>            
        </div>
    </div>
<!-- main-one  -->    
    </div>
    

<!-- main-two  -->
    <div class = "div-two">
    <!-- slider -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="div-two-slider">
                    <div class="slide 1">
                        <div class="slide-textbar">
                             <h3><?php  
                                $query = "SELECT * FROM checkupps";
                                $result = $connection->query($query);
                                if (!$result) die('Error select');
                                $result->data_seek(0);
                                $rows = $result->fetch_assoc()['checkup'];

                                
                                print_r($rows);
                            
                                ?></h3> 
                            <p>для мужчин</p>
                                <ul>
                                    <li><span>Гормональный скрининг</span></li>
                                    <li><span>Тестостерон</span></li>
                                    <li><span>Свободный тестостерон</span></li>
                                    <li><span>Глобулин, связывающий половые гормоны</span></li>
                                </ul>
                                <p class="price">Всего 2800₽ <span>3500₽</span></p>
                        <div class="slider-textbar-buttons">        
                        <button class="green-button" onclick="feedbackFormOpen()">Записаться</button>
                        <button class= "white-button" onclick="authorInfoOpen()">Подробнее</button>
                        </div>
                        </div>
                        <div class = "slide-img">
                            <img src="./img/photo-2.jpg" alt="">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="mySlides fade">
                <div class="div-two-slider">
                    <div class="slide 1">
                        <div class="slide-textbar">
                            <h3><?php 
                                $query = "SELECT * FROM checkupps";
                                $result = $connection->query($query);
                                if (!$result) die('Error select');
                                $result->data_seek(1);
                                $rows = $result->fetch_assoc()['checkup'];

                                
                                print_r($rows);
                            
                                ?></h3> 
                            <p>для мужчин</p>
                                <ul>
                                    <li><span>Гормональный скрининг</span></li>
                                    <li><span>Тестостерон</span></li>
                                    <li><span>Свободный тестостерон</span></li>
                                    <li><span>Глобулин, связывающий половые гормоны</span></li>
                                </ul>
                                <p class="price">Всего 2800₽ <span>3500₽</span></p>
                        <div class="slider-textbar-buttons">        
                        <button class="green-button" onclick="feedbackFormOpen()">Записаться</button>
                        <button class= "white-button" onclick="authorInfoOpen()">Подробнее</button>
                        </div>
                        </div>
                        <div class = "slide-img">
                            <img src="./img/photo-2.jpg" alt="">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="mySlides fade">
                <div class="div-two-slider">
                    <div class="slide 1">
                        <div class="slide-textbar">
                            <h3> <?php 
                                $query = "SELECT * FROM checkupps";
                                $result = $connection->query($query);
                                if (!$result) die('Error select');
                                $result->data_seek(2);
                                $rows = $result->fetch_assoc()['checkup'];

                                
                                print_r($rows);
                            
                                ?></h3> 
                            <p>для мужчин</p>
                                <ul>
                                    <li><span>Гормональный скрининг</span></li>
                                    <li><span>Тестостерон</span></li>
                                    <li><span>Свободный тестостерон</span></li>
                                    <li><span>Глобулин, связывающий половые гормоны</span></li>
                                </ul>
                                <p class="price">Всего 2800₽ <span>3500₽</span></p>
                        <div class="slider-textbar-buttons">        
                        <button class="green-button" onclick="feedbackFormOpen()">Записаться</button>
                        <button class= "white-button" onclick="authorInfoOpen()">Подробнее</button>
                        </div>
                        </div>
                        <div class = "slide-img">
                            <img src="./img/photo-2.jpg" alt="">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="mySlides fade">
                <div class="div-two-slider">
                    <div class="slide 1">
                        <div class="slide-textbar">
                            <h3><?php 
                                $query = "SELECT * FROM checkupps";
                                $result = $connection->query($query);
                                if (!$result) die('Error select');
                                $result->data_seek(3);
                                $rows = $result->fetch_assoc()['checkup'];
                                print_r($rows);
                                ?></h3> 
                            <p>для мужчин </p>
                                <ul>
                                    <li><span>Гормональный скрининг</span></li>
                                    <li><span>Тестостерон</span></li>
                                    <li><span>Свободный тестостерон</span></li>
                                    <li><span>Глобулин, связывающий половые гормоны</span></li>
                                </ul>
                                <p class="price">Всего 2800₽ <span>3500₽</span></p>
                        <div class="slider-textbar-buttons">        
                        <button class="green-button" onclick="feedbackFormOpen()">Записаться</button>
                        <button class= "white-button" onclick="authorInfoOpen()">Подробнее</button>
                        </div>
                        </div>
                        <div class = "slide-img">
                            <img src="./img/photo-2.jpg" alt="">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="slider-scroll">
                <a  class="prev" onclick="plusSlides(-1)"><img src="./img/left-arrow .png" alt=""></a>
                    <span id="curentSlide">1</span><span id="numberSlides" class="grey">/4</span>
                <a  class="next" onclick="plusSlides(1)"><img src="./img/right-arrow.png" alt=""></a>
            </div>
        </div>
    <!-- slider -->
        <script src="./src/index.js"></script>

    </div>
<!-- main-two  -->

<!-- footer -->
    <footer>
        <div class = "logo-svg"><img src="./img/LOGO-white.png" alt=""></div>
        <nav class="footer-nav">
            <a href="@">О клинике</a>
            <a href="@">Услуги</a>
            <a href="@">Специалисты</a>
            <a href="@">Цены</a>
            <a href="@">Контакты</a>
        </nav>
        <div class="social">
            <a href="@">
                <img src="./img/instagram.png" alt="" class="social-logo"> 
            </a>
            <a href="@">
                <img src="./img/WhatsApp.png" alt="" class="social-logo"> 
            </a>
            <a href="@">
                <img src="./img/telegram.png" alt="" class="social-logo"> 
            </a>                    
        </div> 
    </footer>
    <!-- footer -->

    <!-- Feedback form (Only by summon "feedbackFormOpen") -->
    <div class="feedback-form" id = "feedback-form">
        <form action="" method="POST">
            <legend>Запись на приём</legend>
            <div id = "close-feedback-form" onclick = "feedbackFormClose()"><img src="./img/menu-to-close.png" alt="" srcset=""></div>
            <div class="form-groop">
                <label for="">Введите ваше имя</label>
                <input type="text" class = "form-control" name = "user_name" id = "user_name" placeholder = "Иван">
            </div>

            <div class="form-groop">
                <label for="">Введите номер телефона</label>
                <input type="text" class = "form-control" name = "user_phone" id = "user_phone" placeholder = " +7 (999) 99 99 999">
            </div>

            <button type="button" class = white-button onclick = "sendFeedbackForm()">Отправить</button>
        </form>
    </div>
    <!-- Feedback form (Only by summon) -->

    <!-- InfoAboutAutor -->
    <div class="author-info" id = "author-info">
        <div class = "info-text">
        <div id = "close-author-info" onclick = "authorInfoClose()"><img src="./img/menu-to-close.png" alt="" srcset=""></div>
            <p>Добрый день! Если вы смотрите это, значит вы, вероятно, интервьюер или HR, которого заинтересовало моё резюме</p>
            <p>Я использую этот лендинг, как демонстрацию своих текущих навыков вёрстки. Я постоянно развиваюсь, и, как следствие, обновяю этот лендинг новыми "фичами" :)</p>
            <p>Если вы считаете, что продемонстрированных здесь навыков или приёмов недостаточно - я с радостью развею ваши сомнения на собеседовании!</p>
            <p>С исходниками этого, и других моих проектов мы можете ознакомиться на <a href="https://github.com/serafal">https://github.com/serafal</a></p>
            <p>@ С уважением, Кудинов Ярослав, frontend-разработчик.</p>
        </div>
    </div>
</body>
</html>