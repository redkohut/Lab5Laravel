<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Єднаймося, брати мої</title>
    <link rel="stylesheet" href="style-collaboration.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                            <a href="#!" class="header__link">Кооперація</a>
                        </li>
                        <li class="header__item">
                            <a href="team" class="header__link">Команда</a>
                        </li>
                    </ul>
                </nav>
                <!-- @php
                    $email_link = 'mailto:zhenia.yf@gmail.com';
                @endphp
                <div class="header__item1">
                    <a href="{{$email_link}}"><img src="/img/dzig.png"></a>
                </div> -->
            </div>
        </div>
    </header>
    <main class="main">
        <section class="intro">
            <div class="wrapper">
                <h1 class="intro__title">
                    Про нас
                </h1>
                <p class="intro__subtitle">
                    Ми розробники ігор для платаформи Steam. Мріємо створити шедевр про Гетьманщину, а саме про життєвий шлях отамана Івана Сірка. Кожен учасник команди має за плечима неймовірний досвід роботи в команді та з великими проектами. Всі ми є рівноважливими та повноважними учасниками майбутнього успіу гри. Відутня ієрархічна система, адже ми дійсно стали друзями, яких об’єднала спільна мета. І якщо ти теж хочеш потрапити у нашу сім’ю, то ми будемо тільки раді! 
                </p>
                <form class="button-form">
                    <fieldset class="button-form__wrap">
                        <p class="button-form__info-team">
                            <button type="video" class="button-form__linkteam">Телеграм</button>
                        </p>
                    </fieldset>
                </form>        

                <h2 class="intro_title2">Зв'яжіться з нами, якщо є цікава пропозиція, або хочете висловити свою думку</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h3 class="intro_title2"><>
                <form method='post' action="/collaboration/check">
                    <!-- токен для добавки у форму вхадних даних -->
                    @csrf 
                    <input type="email" name="email" id="email" placeholder="Ваш емейл" class="form-control"><br>
                    <input type="text" name="subject" id="subject" placeholder="Введіть тему" class="form-control"><br>
                    <textarea name="message" id="message" class="form-control" placeholder="Введіть ваше звернення до нас"></textarea><br>
                    <button type="submit" class="btn btn-success">Відіслати</button>
                </form>
            </div>
    </main>
    </class>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>