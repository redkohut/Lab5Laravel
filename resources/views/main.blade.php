<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Наша команда</title>
    <link rel="stylesheet" href="style-main.css">
</head>
<body>
    <class class="container">
        <header class="header">
            <div class="wrapper">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="#!" class="header__logo-link">
                            <img src="./img/svg/dziga-logo.svg" alt="Створимо новий ігровий світ" class="header__logo-pic">
                        </a>
                    </div>
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="main" class="header__link">Головна</a>
                            </li>
                            <li class="header__item">
                                <a href="games" class="header__link">Всі ігри</a>
                            </li>
                            <li class="header__item">
                                <a href="collaboration" class="header__link">Кооперація</a>
                            </li>
                            <li class="header__item">
                                <a href="team" class="header__link">Команда</a>
                            </li>
                        </ul>
                    </nav>
                    @php
                        $email_link = 'mailto:zhenia.yf@gmail.com';
                    @endphp
                    <div class="header__item1">
                        <a href="{{$email_link}}"><img src="/img/dzig.png"></a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <section class="intro">
                <div class="wrapper1">
                    <h1 class="intro__title">
                        Створимо новий ігровий світ
                    </h1>
                    <p class="intro__subtitle">
                        Ми нова генерація розробників ігор 🍌
                    </p>
                    <form class="button-form" action="https://www.youtube.com/watch?v=-cSFPIwMEq4&ab_channel=dota2">
                        <fieldset class="button-form__wrap">
                            <p class="button-form__info-zhenia">
                                <button type="video" class="button-form__link">Трейлер до гри</button>
                            </p>
                        </fieldset>
                    </form>
    
                    <h2 class="intro__pers2title">
                        Поринь у світ козаків
                    </h2>
                    <p class="intro__pers2subtitle">
                        Події у грі відбуваються у 17 у добу Хмельниччини. Ви його права рука і надійний друг. Подорожуйте, досліджуйте, перемагайте, надихайте. А головне - знайомтисе з калоритом древньої України! 
                    </p>
    
                    <class class="containr">
                        <form class="shopp">
                            <img src="./img/svg/app-store.svg" alt="" class="shop">
                            <img src="./img/svg/google-play 1.svg" alt="" class="shop">
                            <img src="./img/svg/steam.svg" alt="" class="shop">
                        </form>
                    </class>
    
                    <h3 class="intro__pers3title">
                        Добийся незалежності Гетьманщини
                    </h3>
                    
                    <p class="intro__pers3subtitle">
                        Надзвичайно велика і деталізована відкрита територія, яка дає змогу повністю погрузитися в історію
                    </p>
    
                    <img src="./img/svg/det1.svg" alt="" class="det1"> <h4 class="intro__det1title">Адаптований сюжет</h4>
                    <p class="intro__det1subtitle">
                        Надзвичайно велика сюжетна лінія, котра не залишить гравців поза увагою. Кожна секунду ігрового часу буде сповнена пригодами і неймовірними подіями
                    </p>
    
                    <img src="./img/svg/det2.svg" alt="" class="det1"> <h5 class="intro__det1title">Геніальні NPS</h5>
                    <p class="intro__det1subtitle">
                        Кожен зустрічний персонаж має унікальний характери та риси обличчя. Майже не можливо відрізнити  
                    </p>
    
                    <img src="./img/svg/det3.svg" alt="" class="det1"> <h6 class="intro__det1title">Прокачені бої</h6>
                    <p class="intro__det1subtitle">
                        Наші спеціалісти, котрі мали досвід унікальний досвід і є майстрами бойових мистецтв, стовили дещо неймовірне у плані механіки бойових дій. 
                    </p>

                    <h7 class="intro__pers4title">
                        #Станьотаманом
                    </h7>
                
                    <p class="intro__pers4subtitle">
                        Пройти шлях від простого ліцеїста до кошового отамана, який стане одним із найлегердарніших полководців у світі, дасть вам можливість отримати надзвичайний досвід у вашому житті!
                    </p>
            
                    <class class="container2">
                        <form class="shopp2">
                            <img src="./img/svg/app-store.svg" alt="" class="shop2">
                            <img src="./img/svg/steam.svg" alt="" class="shop2">
                            <img src="./img/svg/google-play 1.svg" alt="" class="shop2">
                        </form>
                    </class>
                    
    
                    <form class="container3">
                        <img src="./img/svg/allprog.svg" alt="" class="shop2">
                    </form>
                   
    
    
                    <h8 class="intro__pers5title">
                        Sirko Inception 3D
                    </h8><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    @php
                        $email_linkApp = 'https://www.apple.com/ua/app-store/';
                    @endphp
                    <div class="back_button1">
                        
                        <a href="{{$email_linkApp}}"><img src="/img/app1.png"></a>
                    </div>
                </div>
        </main>
    </class>
   
</body>
</html>