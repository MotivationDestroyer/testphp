 <!DOCTYPE html>
<html lang="ru-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Sport</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="header-nav-content">
                    <img class="main-logo" src="/images/icons/logo.svg" alt="trena">
                    <div class="header-modal">
                        <button class="modal-open" onclick="openModal()"></button>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#events">Мероприятия</a></li>
                            <li><a href="#timetable">Расписание</a></li>
                            <li><a href="#about-company">О компании</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="social">
                    <ul class="social-ul">
                        <li class="social-inst social-element"><a href="#"></a></li>
                        <li class="social-fb social-element"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="main-container">
                <div class="training-text">
                    <h1>онлайн тренировки любой сложности</h1>
                    <div class="training-number">
                        <h2>> 15 тренировок</h2>
                    </div>
                    <div class="training-low-text">
                        <span>в области спортивной физиологии и нутрициологии</span>
                        <button class="training-button-info">Узнать подробнее</button>
                    </div>
                </div>
                   <img class="training-girl" src="images/girl.png" alt="girl">
                 <a class="training-slider" href="#events"><img src="images/icons/arrow.svg" alt="slider"></a>  
            </div>
        </div>
        <div class="container">
            <h2 class="event-main-text" id="events">Ближайшие события</h2>
            <div class="events-list">
                <div class="card">
                        <div class="card-content">
                            <span class="card-timeline">29.06 - 4.07</span>
                        <span class="card-event-name">Марафон выносливости</span>
                        <a href="" onclick="countTrain7()" class="card-participation">Записаться</a>
                        </div>
                        <img class="card-bg" src="images/maraphone.png" alt="Марафон">
                        <a href="#" class="card-event-type">марафон</a>
                        <img class="card-add" src="images/icons/plus.svg" alt="add">
                </div>
                <div class="card">
                        <div class="card-content">
                            <span class="card-timeline">9.07</span>
                        <span class="card-event-name">Как стать тренером?</span>
                        <a href="" onclick="countTrain8()" class="card-participation">Записаться</a>
                        </div>
                        <img class="card-bg" src="images/vebinar.png" alt="вебинар">
                        <a href="#" class="card-event-type">вебинар</a>
                        <img class="card-add" src="images/icons/plus.svg" alt="add">
                </div>
                <div class="card">
                        <div class="card-content">
                            <span class="card-timeline">15.07</span>
                            <span class="card-event-name">Йога, как стиль жизни</span>
                            <a href="" onclick="countTrain9()" class="card-participation">Записаться</a>
                        </div>
                        <img class="card-bg" src="images/Yoga.png" alt="Йога">
                        <a href="#" class="card-event-type">вебинар</a>
                        <img class="card-add" src="images/icons/plus.svg" alt="add">
                </div>
            </div>

        </div>
        <form action="www/index.php" method="post">
        <div class="container">
            <div class="timetable-container-header" id="timetable">
                <h2 class="timetable-name">Расписание тренировок</h2>
                <span class="timetable-date">22 - 28 июня</span>
            </div>
            <div class="timetable-container-workout">
                <div class="workout-element" id="workout-element-1" onclick="countTrain1()">
                    <h4 class="workout-element-date">22 июня, 10:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/body.svg" alt="body">
                        <h3>Функциональный тренинг</h3>
                    </div>
                </div>
                <div class="workout-element" id="workout-element-2" onclick="countTrain2()">
                    <h4 class="workout-element-date">24 июня, 10:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/bottle.svg" alt="bottle">
                        <h3>Body sculpt</h3>
                    </div>
                </div>
                <div class="workout-element" id="workout-element-3" onclick="countTrain3()">
                    <h4 class="workout-element-date">26 июня, 11:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/dumbbell.svg" alt="dumbbell">
                        <h3>L.A.B.</h3>
                    </div>
                </div>
                <div class="workout-element" id="workout-element-4" onclick="countTrain4()">
                    <h4 class="workout-element-date">23 июня, 10:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/jump.svg" alt="skipping-rope">
                        <h3>Силовой микс</h3>
                    </div>
                </div>
                <div class="workout-element" id="workout-element-5" onclick="countTrain5()">
                    <h4 class="workout-element-date">25 июня, 11:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/heart.svg" alt="heart">
                        <h3>Дыхательные практики</h3>
                    </div>
                </div>
                <div class="workout-element" id="workout-element-6" onclick="countTrain6()">
                    <h4 class="workout-element-date">27 июня, 10:00</h4>
                    <div class="workout-element-lowblock">
                        <img src="images/icons/weight.svg" alt="weight">
                        <h3>Комплексная разминка</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="pre-distribution-container">
            <div class="container"id="email-sub">
                <div class="distribution-main">
                    <div class="distribution-main-text">
                        <h3>Подпишитесь на рассылку</h3>
                    </div>
                    <div class="distribution-main-box">
                            <input type="text" name="email" class="email" id="email" placeholder="Введите e-mail">
                            <button type="submit" class="submit-email" onclick="">ПОДПИСАТЬСЯ</button>
                    </div>
                    <div class="agreement">
                        <div class="agreement-submit-text">
                            <input type="checkbox" id="01" class="checkbox">
                            <label for="01">Согласен с обработкой <a href="#" target="_blank">персональных данных</a></label>
                        </div>
                        <button type="submit" class="submit-email submit-phone">ПОДПИСАТЬСЯ</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="container">
            <div class="container-pre-footer" id="about-company">
                <div class="footer-about-company">
                    <h2>О компании</h2>
                    <span>Наша компания является одной из немногих,
                        кто предлагает фитнес услуги онлайн!
                        Оставайтесь с нами и вы сами увидите,
                        что мы проводим не только онлайн-тренировки.</span>
                    <button class="submit-training" onclick="location.href='/registracia'">>Записаться</button>
                </div>
                <img class="footer-trainer" src="images/trainer.png" alt="trainer">
                <div class="footer-about-virtues">
                    <div class="footer-about-virtues-element">
                        <h3>Экономия времени</h3>
                        <span>Не нужно тратить время на дорогу</span>
                    </div>
                    <div class="footer-about-virtues-element">
                        <h3>Индивидуальный подход</h3>
                        <span>Внимание тренера пренадлежит только вам</span>
                    </div>
                    <div class="footer-about-virtues-element">
                        <h3>Экономия денег</h3>
                        <span>Средняя цена одной тренировки - 700₽</span>
                    </div>
                    <div class="footer-about-virtues-element">
                        <h3>Опытный персонал</h3>
                        <span>Стаж работы у наших тренеров от 5 лет</span>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer>
        <div class="container footer-container">
            <div class="footer-content">
                <div class="footer-nav-content">
                    <img class="main-logo" src="images/icons/logo.svg" alt="trena">
                    <nav>
                        <ul class="footer-ul">
                            <li><a href="#events">Мероприятия</a></li>
                            <li><a href="#timetable">Расписание</a></li>
                            <li><a href="#about-company">О компании</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="social-footer">
                    <div class="social social-footer-content">
                        <a href="#" class="social-email" target="_blank">info@freefit.com</a>
                        <ul class="social-ul">
                            <li class="social-inst social-element"><a href="#"></a></li>
                            <li class="social-fb social-element"><a href="#"></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <div class="modal" id="modal">
        <a href="#" class="main-logo"><img src="images/icons/logo.svg" alt="logo"></a>
        <nav>
            <ul class="modal-nav">
                <li><a href="#events">Мероприятия</a></li>
                <li><a href="#timetable">Расписание</a></li>
                <li><a href="#about-company">О компании</a></li>
            </ul>
        </nav>
        <button class="modal-close" onclick="closeModal()"></button>
        <ul class="modal-social">
            <li class="social-inst social-element"></li>
            <li class="social-fb social-element"></li>
        </ul>
    </div>
    <script src="js/scriptModal.js"></script>
    <script src="js/scriptSendEmail.js"></script>
    <script src="js/scriptCounter.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
