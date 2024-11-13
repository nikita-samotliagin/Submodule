<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strength & Will</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>
    <main class="main">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <img src="images/Group 1.svg" alt="logo">
                </div>
                <nav class="menu">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="about_us.html">О нас</a>
                        </li>
                        <li class="menu-item">
                            <a href="coaching_staff.html">Тренерский состав</a>
                        </li>
                        <li class="menu-item">
                            <a href="group_classes.html">Групповые занятия</a>
                        </li>
                        <li class="menu-item">
                            <a href="#contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="main-content">
            <div class="container">
                <div class="main-info">
                    <div class="main-logo">
                        <h1 class="main-title">Тренажёрный зал на Селигерской</h1>
                        <img src="images/Group 2.svg" alt="logo" class="main-img">
                        <img src="images/Group 3.svg" alt="logo" class="main-img2">
                        <img src="images/Group 4.svg" alt="logo" class="main-img3">
                    </div>
                    <p class="main-text">
                        Приходите на пробную тренировку
                        <br>
                        и ощути на себе все преимущества клуба
                    </p>
                    <div class="main-action">
                        <button class="button" id="openModalBtn">Записаться на тренировку</button>
                    </div>
                    
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Запись на тренировку</h1>
                            <!-- Форма для заполнения имени и телефона -->
                            <form action="sumbit_form.php" method="post">
                                <input type="text" id="name" name="name" required placeholder="Имя"><br><br>
                                
                                <input type="tel" id="phone" name="phone" required placeholder="Номер телефона"><br><br>
                                <p>Как с тобой связаться?</p>
                                <div class="input-radio">
<label class="label1">
    <input type="radio" name="contact_method" value="Позвонить">
    Позвонить
</label>
<label class="label2">
    <input type="radio" name="contact_method" value="Написать в WhatsApp">
    Написать в WhatsApp
</label>

                                </div>
                                <input type="submit" value="Отправить" class="button">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="carousel"> 
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="images/1.jpg" alt="Ресепшен">
                </div>
                <div class="carousel-item">
                    <img src="images/2.webp" alt="Тренажёрный зал">
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" alt="Зал единоборств">
                </div>
            </div>
        </section>
        <section class="main-card">
            <div class="card-inner">
                <h1 class="card-head">Оформите карту зала</h1>
                <h4 class="card-info">Приобретая нашу карту, вы становитесь полноправным членом зала.</h4>
                <button class="main-card-button">Оформить карту</button>
            </div>
            <div class="card">
                <h5 class="card-domain">www.strength-and-will.ru</h5>
                <img src="images/Group 1.svg" alt="Logo" class="card-logo" >
                <h2 class="text-logo">Твой ключ к успеху</h2>
                <h3 class="card-initials">Samotliagin Nikita</h3>
            </div>
        </section>
        <hr class="hr">
        <section class="directors-section">
            <div class="foto-direktors">
                <img src="images/Direktor.jpg" alt="">
                <div class="description-gym">
                    <h4>«Strength & Will» стал первым залом нашего района.</h4>
                    <p>
                        Strength & Will — это первый тренажёрный зал нашего района, открывший свои двери для всех,<br>
                         кто стремится к физическому совершенству и крепкому здоровью. С момента своего основания<br>
                         в октябре 2024 года, наш зал стал местом, где движение и сила обретают новое значение.<br>
                         Мы гордимся своей командой опытных профессионалов, которые готовы помочь вам на каждом этапе<br>
                         вашего фитнес-пути. Душевная атмосфера и внимательное отношение к каждому посетителю — наш особый знак.<br>
                         В Strength & Will вы найдете не только современное оборудование и разнообразные программы тренировок,<br>
                         но и команду единомышленников, для которых ваш успех — это главная цель. Присоединяйтесь к нам<br>
                         и станьте частью сообщества, для которого здоровье и сила — это стиль жизни!
                    </p>
                </div>
            </div>
            <div class="words-directors">
                <h2>Приходите в «Strength & Will», присоединяйтесь к нам!<br>
                    Пусть здоровье и физическое совершенство станут и<br>
                    вашим поводом для гордости!</h2><br>
                <h3>Самотлягин Никита, генеральный директор Strength & Will</h3>
            </div>
        </section>
        <section>
            <hr>
        <div class="karta">
            <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A750910236930559f37361f17ecc16c91f703d721acd26b2890804eced4244bee&amp;width=100vw&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            <div class="info-karta">
                <h1>Приходите в зал</h1>
                <div class="info-karta-telephone">
                    <p>
                        Телефон:<br>
                        8 (968) 809 78 41
                </div>
                <div class="info-karta-address">
                    Адрес клуба:<br>
                    Москва,Рогачёвский переулок,5А<br>
                </div>
                7 минут от метро Селигерская<br>
                бесплатная парковка
                </p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-logo">
            <img src="images/Group 1.svg" alt="logo">
        </div>
        <div class="footer-list">
            <ul>
                <li>
                    <a href="about_us.html">О нас</a>
                </li>
                <li>
                    <a href="coaching_staff.html">Тренерский состав</a>
                </li>
                <li>
                    <a href="group_classes.html">Груповые занятия</a>
                </li>
                <li>
                    <a href="#" id="contacts">Контакты</a>
                </li>
            </ul>
        </div>
        <div class="footer-info">
            Зал Strength & Will на Селигерской<br>
            Москва,Рогачёвский переулок,5А
            <br><p>ПН-ПТ | 7:00-24:00, СБ-ВС | 8:00-23:00</p><br>
            <h5>strengthandwill@mail.com</h5>
        </div>
        <div class="footer-contacts">
            <h1>Контакты</h1>
            <p>
                8 968 809 78 41
            </p>
            <a href="#">
            <img src="images/WhatsApp.svg" alt="WhatsApp">
            </a>
            <a href="https://t.me/Samotliagin">
            <img src="images/Telegram.svg" alt="Telegram">
            </a>
        </div>
   
        <div class="footer-rights">
            <p>
                © 2007-2024 Сеть залов Strength & Will в г. Москва
            </p>
        </div>
    </footer>
    </main>
    <script src="script.js"></script>
</body>

</html>