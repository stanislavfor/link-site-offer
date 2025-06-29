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
        $errorMessage = "Enter the correct user credentials.";

        // Устанавливаем перенаправление через 2 секунды
        header("Refresh: 2; url=index_EN.php");
    } else {
        // Если поля не заполнены, выводим сообщение об ошибке
        $errorMessage = "Please fill in both fields.";
    }
}

// Устанавливаем класс с динамическими стилями для блока ошибки
$errorClass = !empty($errorMessage) 
    ? 'background-color: #f8d7da; border-color: #f5c6cb; display: block;' 
    : 'display: none;';
?>
<!DOCTYPE html>
<html lang="en">

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
                <li><a href="login_EN.php">Login</a></li>
                <li><a href="#contacts" class="smooth-scroll">Contacts</a></li>
                <li><a href="index_EN.php">Promo</a></li>
                <li><a href="#tariffs" class="smooth-scroll">Tariff</a></li>
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
                                <h2 class="form-title_auth">Sign In to Continue</h2>
                                <div class="form-alert_auth" style="<?= htmlspecialchars($errorClass) ?>">
                                    <?= htmlspecialchars($errorMessage) ?>
                                </div>
                                <label for="username">Enter the user's login</label>
                                <input type="text" id="username" name="username" class="form-input_auth" placeholder="your_login" required autofocus>
                                <label for="password">Enter the user's password</label>
                                <input type="password" id="password" name="password" class="form-input_auth" placeholder="your_password" autocomplete="current-password" required>
                                <button class="form-button-submit_auth" type="submit">login</button>
                                <p class="form-description_auth">* log in to the system</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tariff" id="tariffs">
            <h2 class="headline">Image Hosting Rates</h2>
            <div class="tariff-container">
                <div class="tariff-wrap">
                    <h2>Tariff : Free</h2>
                    <div class="description">
                        <p>Free download of up to 15 images.</p>
                        <p>Direct links to images.</p>
                        <p>The file size is limited to 2MB.</p>
                        <p>Support via the forum.</p>
                    </div>
                    <button class="button" onclick="window.location.href='index_EN.php#email-section'">Learn More</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Tariff : Standard</h2>
                    <div class="description">
                        <p>Upload up to 50 images.</p>
                        <p>Direct links to images.</p>
                        <p>The file size is limited to 5MB.</p>
                        <p>Support via email.</p>
                    </div>
                    <button class="button" onclick="window.location.href='index_EN.php#email-section'">Learn More</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Tariff : Premium</h2>
                    <div class="description">
                        <p>Unlimited image downloads.</p>
                        <p>Direct links to images.</p>
                        <p>The file size is limited to 10MB.</p>
                        <p>Priority support 24/7.</p>
                    </div>
                    <button class="button" onclick="window.location.href='index_EN.php#email-section'">Learn More</button>
                </div>
            </div>
        </div>
        <h2 class="headline" id="gallery-headline">Image Gallery</h2>
        <div class="gallery-show" id="gallery-show">
            <div class="gallery-item" id="item11"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 1">
                <p>Image 1</p>
                <p>Description 1</p>
                <p>link to Image 1</p>
            </div>
            <div class="gallery-item" id="item12"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 2">
                <p>Image 2</p>
                <p>Description 2</p>
                <p>link to Image 2</p>
            </div>
            <div class="gallery-item"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 3">
                <p>Image 3</p>
                <p>Description 3</p>
                <p>link to Image 3</p>
            </div>
            <div class="gallery-item" id="item14"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 4">
                <p>Image 4</p>
                <p>Description 4</p>
                <p>link to Image 4</p>
            </div>
            <div class="gallery-item" id="item21"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 5">
                <p>Image 5</p>
                <p>Description 5</p>
                <p>link to Image 5</p>
            </div>
            <div class="gallery-item"><img src="https://i.ibb.co/YpkXDjH/img-200x200.jpg" alt="Image 6">
                <p>Image 6</p>
                <p>Description 6</p>
                <p id="task">link to Image 6</p>
            </div>
        </div>
        <div class="container-wrap">
            <div class="rules">
                <h3>Image Hosting Usage Rules</h3>
                <h4 class="rules_title">1. Registration and Account:</h4>
                <p class="rules_text"> - Users must register by providing a valid email address.
                    <br> - Passwords should be secure and must not be shared with third parties.
                </p>
                <h4 class="rules_title">2. Uploading Images:</h4>
                <p class="rules_text"> - Only images in JPG, PNG, and GIF formats can be uploaded.
                    <br> - The size of the uploaded file must not exceed 10 MB.
                    <br> - Uploading images containing obscene, offensive, or illegal content is prohibited.
                </p>
                <h4 class="rules_title">3. Copyright:</h4>
                <p class="rules_text"> - Users must ensure they own the copyright to the uploaded image or have permission to use it.
                    <br> - Copyright violations may result in the removal of the image and account suspension.
                </p>
                <h4 class="rules_title">4. Use of Direct Links:</h4>
                <p class="rules_text"> - Direct links to images are provided for personal use only and may not be used for commercial purposes without proper authorization.
                    <br> - Using the hosting service to store and distribute content that violates laws or third-party rights is prohibited.
                </p>
                <h4 class="rules_title">5. Image Removal:</h4>
                <p class="rules_text"> - The administration reserves the right to remove images that violate the usage rules without prior notice.
                    <br> - Users can delete their images at any time.
                    <br> - Personal user data is protected and will not be shared with third parties without consent.
                    <br> - The Privacy Policy provides detailed information on data processing and storage.
                </p>
                <h4 class="rules_title">7. Responsibility:</h4>
                <p class="rules_text"> - The hosting service is not responsible for the quality, accuracy, or legality of uploaded images.
                    <br> - Users bear full responsibility for the content they upload and share.
                </p>
                <h4 class="rules_title">8. Changes to the Rules:</h4>
                <p class="rules_text"> - The administration reserves the right to modify the hosting usage rules at any time.
                    <br> - Users will be notified of any changes via email or website notifications.
                </p>
                <h4 class="rules_title">9. Conclusion:</h4>
                <p class="rules_text"> - Adhering to these rules will help ensure a comfortable and safe experience when using the image hosting service. </p>
            </div>
            <div class="mark">
                <h4>Images links Hosting Gallery © 2024, ImageLinks, Moscow</h4>
            </div>
        </div>
        <div class="footer" id="contacts">
            <div class="footer-name">Menu<span class="header-name"><a href="#gallery-headline" class="smooth-scroll">Uploading a file</a></span> <span class="header-name"><a href="#tariffs" class="smooth-scroll">Hosting Rates</a></span></div>
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
            <div class="footer-2-name">Images Hosting<span class="header-name"><a href="#header" class="smooth-scroll">Hosting of Images Link</a></span> </div>
            <div class="footer-contacts">
                <h4>Contacts :</h4>
                <button class="footer_button" id="button4" onclick="window.location.href='index_EN.php#email-section'">Send an Email</button>
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
    <script>
        // Функция для добавления плавного скроллинга
        function addSmoothScroll(buttonId, targetId) {
            document.getElementById(buttonId).addEventListener('click', function(e) {
                e.preventDefault(); // Остановка стандартного поведения
                document.querySelector(`#${targetId}`).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
        addSmoothScroll('up-from-email-form', 'header');

    </script>
</body>

</html>
