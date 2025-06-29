<?php
// Установим переменную для сообщения об ошибке
$errorMessage = "";

// Если форма отправлена
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Проверяем, заполнены ли оба поля
    if (!empty($username) && !empty($password)) {
        // Если заполнены, данные считаются некорректными (заглушка)
        $errorMessage = "Введите корректные учетные данные пользователя";

        // Устанавливаем перенаправление через 2 секунды
        header("Refresh: 2; url=index.php");
    } else {
        // Если поля не заполнены, выводим сообщение об ошибке
        $errorMessage = "Заполните оба поля.";
    }
}

// Устанавливаем класс с динамическими стилями для блока ошибки
$errorClass = !empty($errorMessage) 
    ? 'background-color: #f8d7da; border-color: #f5c6cb; display: block;' 
    : 'display: none;';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Hosting</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="header" id="header">
            <div class="site-name">Images Hosting<span class="header-name">Хостинг Картинок (изображений)</span></div>
            <ul class="menu">
                <!-- Блок меню -->
                <li><a href="login.php">Логин</a></li>
                <li><a href="#contacts" class="smooth-scroll">Контакты</a></li>
                <li><a href="index.php">Промо</a></li>
                <li><a href="#tariffs" class="smooth-scroll">Тарифы</a></li>
            </ul>
            <div class="header-logo">
                <a href="#gallery-headline" class="smooth-scroll">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="50" height="50">
                        <!-- Квадрат -->
                        <rect x="10" y="10" width="80" height="80" fill="none" stroke="black" stroke-width="6" />
                        <!-- Усеченная правая сторона -->
                        <polygon points="90,10 90,90 70,90" fill="white" stroke="black" stroke-width="4" />
                        <!-- Иконка изображения (упрощенная версия) -->
                        <polyline points="25,65 35,55 50,70 65,45 85,75" fill="none" stroke="black" stroke-width="4" />
                        <circle cx="35" cy="35" r="5" fill="black" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="section" id="section-auth-form">
            <div class="main">
                <div class="container-wrap">
                    <div class="container-form">
                        <div class="container-wrapper_auth">
                            <form method="post" action="">
                                <h2 class="form-title_auth">Авторизация</h2>
                                <div class="form-alert_auth" style="<?= htmlspecialchars($errorClass) ?>">
                                    <?= htmlspecialchars($errorMessage) ?>
                                </div>
                                <label for="username">Логин пользователя</label>
                                <input type="text" id="username" name="username" class="form-input_auth" placeholder="your_login" required autofocus>
                                <label for="password">Пароль пользователя</label>
                                <input type="password" id="password" name="password" class="form-input_auth" placeholder="your_password" autocomplete="current-password" required>
                                <button class="form-button-submit_auth" type="submit">Войти</button>
                                <p class="form-description_auth">* войти в систему</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tariff" id="tariffs">
            <h2 class="headline">Тарифы Хостинга Изображений</h2>
            <div class="tariff-container">
                <div class="tariff-wrap">
                    <h2>Тариф : Free</h2>
                    <div class="description">
                        <p>Бесплатная загрузка до 15 изображений.</p>
                        <p>Прямые ссылки на изображения.</p>
                        <p>Ограниченный размер файла - до 2MB.</p>
                        <p>Поддержка через форум.</p>
                    </div>
                    <button class="button" onclick="window.location.href='email-page.html'">Подробно</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Тариф : Standard</h2>
                    <div class="description">
                        <p>Загрузка до 50 изображений.</p>
                        <p>Прямые ссылки на изображения.</p>
                        <p>Ограниченный размер файла - до 5MB.</p>
                        <p>Поддержка через email.</p>
                    </div>
                    <button class="button" onclick="window.location.href='email-page.html'">Подробно</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Тариф : Premium</h2>
                    <div class="description">
                        <p>Неограниченная загрузка изображений.</p>
                        <p>Прямые ссылки на изображения.</p>
                        <p>Ограниченный размер файла - до 10MB.</p>
                        <p>Приоритетная поддержка 24/7.</p>
                    </div>
                    <button class="button" onclick="window.location.href='email-page.html'">Подробно</button>
                </div>
            </div>
        </div>
        <h2 class="headline" id="gallery-headline">Галерея изображений</h2>
        <div class="gallery-show" id="gallery-show">
            <div class="gallery-item" id="item11"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 1">
                <p>Image 1</p>
                <p>Description 1</p>
                <p>link</p>
            </div>
            <div class="gallery-item" id="item21"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 2">
                <p>Image 2</p>
                <p>Description 2</p>
                <p>link</p>
            </div>
            <div class="gallery-item"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 3">
                <p>Image 3</p>
                <p>Description 3</p>
                <p>link</p>
            </div>
        </div>
        <div class="container-wrap">
            <div class="rules">
                <h3>Правила пользования Хостингом изображений</h3>
                <h4 class="rules_title">1. Регистрация и аккаунт:</h4>
                <p class="rules_text">- Пользователи должны зарегистрироваться, предоставив действующий адрес электронной почты.
                    <br> - Пароль должен быть защищённым и не передаваться третьим лицам.
                </p>
                <h4 class="rules_title">2. Загрузка изображений:</h4>
                <p class="rules_text">- Загружать можно только изображения форматов JPG, PNG и GIF.
                    <br> - Размер загружаемого файла не должен превышать 10 МБ.
                    <br> - Запрещено загружать изображения, содержащие непристойные, оскорбительные или незаконные материалы.
                </p>
                <h4 class="rules_title">3. Авторские права:</h4>
                <p class="rules_text"> - Пользователь гарантирует, что он является владельцем авторских прав на загружаемое изображение или имеет разрешение на его использование.
                    <br> - Нарушение авторских прав может привести к удалению изображения и блокировке аккаунта.
                </p>
                <h4 class="rules_title">4. Использование прямых ссылок:</h4>
                <p class="rules_text">- Прямые ссылки на изображения предоставляются только для личного использования и не могут быть использованы в коммерческих целях без соответствующего разрешения.
                    <br> - Запрещено использовать хостинг для хранения и распространения контента, нарушающего законы или права третьих лиц.
                </p>
                <h4 class="rules_title">5. Удаление изображений:</h4>
                <p class="rules_text">- Администрация оставляет за собой право удалять изображения, нарушающие правила пользования, без предварительного уведомления.
                    <br> - Пользователи могут самостоятельно удалять свои изображения в любое время.
                    <br> - Персональные данные пользователей защищены и не передаются третьим лицам без согласия пользователя.
                    <br> - Политика конфиденциальности подробно описывает обработку и хранение данных.
                </p>
                <h4 class="rules_title">7. Ответственность:</h4>
                <p class="rules_text">- Хостинг не несёт ответственности за качество, точность и законность загружаемых изображений.
                    <br> - Пользователи несут полную ответственность за контент, который они загружают и распространяют.
                </p>
                <h4 class="rules_title">8. Изменение правил:</h4>
                <p class="rules_text">- Администрация оставляет за собой право изменять правила пользования хостингом в любое время.
                    <br> - О всех изменениях пользователи будут уведомлены через электронную почту или уведомления на сайте.
                </p>
                <h4 class="rules_title">9. Заключение:</h4>
                <p class="rules_text">- Соблюдение указанных правил поможет обеспечить комфортное и безопасное использование хостинга изображений.</p>
            </div>
            <div class="mark">
                <h4>Images links Hosting Gallery © 2024, ImageLinks, Moscow</h4>
            </div>
        </div>
        <div class="footer" id="contacts">
            <div class="footer-name">Menu<span class="header-name"><a href="#gallery-headline" class="smooth-scroll">Загрузка файла</a></span> <span class="header-name"><a href="#tariffs" class="smooth-scroll">Тарифы Хостинга</a></span></div>
            <div class="footer-logo">
                <a href="#header" class="smooth-scroll">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                        <!-- Квадрат -->
                        <rect x="10" y="10" width="80" height="80" fill="none" stroke="black" stroke-width="6" />
                        <!-- Усеченная правая сторона -->
                        <polygon points="90,10 90,90 70,90" fill="white" stroke="black" stroke-width="4" />
                        <!-- Иконка изображения (упрощенная версия) -->
                        <polyline points="25,65 35,55 50,70 65,45 85,75" fill="none" stroke="black" stroke-width="4" />
                        <circle cx="35" cy="35" r="5" fill="black" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer-2">
            <div class="footer-2-name">Images Hosting<span class="header-name"><a href="#header" class="smooth-scroll">Хостинг Картинок (изображений)</a></span> </div>
            <div class="footer-contacts">
                <h4>Контакты :</h4>
                <button class="footer_button" onclick="window.location.href='email-page.html'">Отправить Email</button>
                <!--                <a href='/images/email-page' class="smooth-scroll" target="_self"><p>Отправить сообщение</p>></a>-->
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('a.smooth-scroll').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
    
</body>

</html>
