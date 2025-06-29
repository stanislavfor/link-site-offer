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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('emailForm');
            const responseOutput = document.getElementById('response');
            form.addEventListener('submit', async (event) => {
                event.preventDefault(); // Отменяем стандартное поведение формы
                responseOutput.textContent = "Sending a message...";
                const formData = new FormData(form);
                try {
                    const response = await fetch('send_message_en.php', {
                        method: 'POST',
                        body: formData
                    });
                    const text = await response.text();
                    responseOutput.textContent = text;
                } catch (error) {
                    responseOutput.textContent = "An error occurred when sending the message.";
                }
            });
            // Обработчик сброса формы
            form.addEventListener('reset', () => {
                responseOutput.textContent = "* Send your message"; // Очищаем поле ответа
            });
        });

    </script>
</head>

<body>
    <div class="container">
        <div class="header" id="header">
            <div class="site-name">Images Hosting<span class="header-name">Хостинг Картинок (изображений)</span></div>
            <ul class="menu">
                <!-- Блок меню -->
                <li><a href="login_EN.php">Login</a></li>
                <li><a href="#contacts" class="smooth-scroll">Contacts</a></li>
                <li><a href="index.php" class="">Russian</a></li>
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
        <!--        <div class="section" id="section-auth-form" th:if="${!authenticated}">-->
        <div class="section" id="section-auth-form">
            <div class="main">
                <div class="container-wrap">
                    <div class="container-form">
                        <div class="container-wrapper_promo" id="promo">
                            <h2>Promo Offer</h2>
                            <h3>Using image hosting with direct links opens up a world of possibilities for teachers and students in educational projects. This tool makes it easy to share materials, collaborate, and create high-quality content.</h3>
                            <p>Image hosting provides a direct link to uploaded images, making it convenient to work with files online. It also helps users understand how to incorporate this service into their educational process.</p>
                            <button class="email-button" style="margin-top: 5px;" onclick="window.location.href='process_form.html'">Please complete the survey question</button>
                            <p>----------------------------------</p>
                            <h3>There are several ways that image hosting can be used in education or as a service for educational programs.:</h3>
                            <h5>1. Collaboration and file sharing:</h5>
                            <p>Students and teachers can use hosting services to share files such as images, presentations, and other materials. This simplifies teamwork on projects and group discussions. Teachers can organize group projects where each student uploads their part of the work to the hosting service and shares the link with the team. This makes coordination and feedback processes easier.</p>
                            <p class="special-paragrath">Source: Canva for Education offers free tools for student collaboration on design projects.</p>
                            <h5>2. Student portfolios:</h5>
                            <p>Students involved in design or development can create and maintain portfolios of their work using image hosting. This helps them organize and showcase their projects to potential employers.</p>
                            <h5>3. Support for educational materials:</h5>
                            <p>Teachers can use image hosting to upload and store visual materials such as diagrams, charts, and illustrations that complement educational content and make it more engaging for students.</p>
                            <h5>4. Online courses and webinars:</h5>
                            <p>Creators of online courses and webinars can use image hosting to store and provide visual resources required for teaching. Direct links to images can be easily embedded into online courses or presentations.</p>
                            <h5>5. Image optimization:</h5>
                            <p>In courses on website performance optimization, it’s important to learn how to properly compress and optimize images before uploading. Image hosting services often provide compression features, helping students understand the importance of this practice.</p>
                            <p class="special-paragrath">Article: "Image Optimization" by Google Developers outlines best practices for optimizing images for websites.</p>
                            <h5>6. UX/UI design projects, prototyping, and testing:</h5>
                            <p>Students need to create interface prototypes and test them with real users. By uploading screenshots or mockups to the hosting service, they can quickly gather feedback by sharing a project link.</p>
                            <p class="special-paragrath">Tools: Figma and Adobe XD allow exporting mockups in PNG or JPG formats, which can then be uploaded to hosting services.</p>
                            <h5>7. Design documentation:</h5>
                            <p>Teachers find it convenient to gather all course materials in one place, including examples of UI elements, icons, and other visual components. Direct links simplify access to these resources.</p>
                            <p class="special-paragrath">Practice: Zeplin is widely used by designers for documenting interfaces, but image hosting can also serve as an alternative solution.</p>
                            <h5>8. Web development courses: Uploading images for websites:</h5>
                            <p>While learning web development, students often need to upload images for their projects. Using hosting simplifies this task, as they receive a direct link to the image, which can be inserted directly into HTML code.</p>
                            <p class="special-paragrath">Examples: Codecademy and Coursera offer web design and front-end courses where students work with images.</p>
                            <h5>9. Feedback and evaluation:</h5>
                            <p>Teachers can use hosting to provide feedback on students' work, sharing links to specific images with comments and recommendations.</p>
                            <h5>10. Educational blogs and forums: Publishing learning materials:</h5>
                            <p>Teachers and students can run educational blogs where they post articles on design, development, and related topics. Image hosting allows them to add illustrations and screenshots without embedding them directly on the site. Platforms like WordPress and Medium support embedding images via direct links. Forum support: Hosting can be used for sharing screenshots of errors, problematic code sections, or mockups between students and teachers. Direct links simplify communication.</p>
                            <p class="special-paragrath">Sources: Stack Overflow and GitHub Discussions actively use image attachments for resolving technical issues.</p>
                            <h5>11. Learning graphic design:</h5>
                            <p>Creating portfolios: Students can use hosting to create online portfolios of their work. Direct links make it easy to share projects with teachers, peers, and potential employers.</p>
                            <p class="special-paragrath">Example: Behance is a platform for showcasing design projects where students can display their work.</p>
                            <br>
                            <br>
                            <p>----------------------------------</p>
                            <h5>Image hosting can be seamlessly integrated into educational processes, making access to visual materials, collaboration, and learning much easier. It’s a powerful tool with a wide range of applications in the field of education.</h5>
                            <h5>It’s important to consider laws and regulations regarding the use of images for educational purposes to ensure compliance with copyright standards.</h5>
                            <br>
                            <br>
                            <button id="past_to_email" class="email-button" style="margin-top: 5px;" onclick="window.location.href='index_EN.html#emailForm'">Please send your question</button>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
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
                    <button class="button" id="button1">Learn More</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Tariff : Standard</h2>
                    <div class="description">
                        <p>Upload up to 50 images.</p>
                        <p>Direct links to images.</p>
                        <p>The file size is limited to 5MB.</p>
                        <p>Support via email.</p>
                    </div>
                    <button class="button" id="button2">Learn More</button>
                </div>
                <div class="tariff-wrap">
                    <h2>Tariff : Premium</h2>
                    <div class="description">
                        <p>Unlimited image downloads.</p>
                        <p>Direct links to images.</p>
                        <p>The file size is limited to 10MB.</p>
                        <p>Priority support 24/7.</p>
                    </div>
                    <button class="button" id="button3">Learn More</button>
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
        <div class="container-wrap" id="email-section">
            <div class="email-bg">
                <h3>Send a message</h3>
                <div class="email-container">
                    <div class="text-block email-grey">
                        <h2>Hello! 😊</h2>
                        <br>
                        <p>We’d love to hear about the type of image hosting plan you’re looking for. Just drop us a message, and we’ll send you a detailed list of our services and pricing options.</p>
                        <p>If you have any questions about how our service works, or if you’d like to share recommendations or suggestions to help us improve, we’d be delighted to hear from you! Please leave your contact information, and we’ll get in touch with you in your preferred way to discuss further.</p>
                        <h3>Let me know if you'd like further tweaks! 😊</h3>
                        <form action="" target="_self" style="margin-top: 5px;">
                            <button class="email-button" id="up-from-email-form">To top of the Page</button>
                        </form>
                    </div>
                    <div class="form-block email-grey">
                        <h2>Feedback form</h2>
                        <form id="emailForm">
                            <label for="name">Your name:</label>
                            <input type="text" id="name" name="name">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="message">Your message:</label>
                            <textarea id="message" name="message" rows="7"></textarea>
                            <button type="submit" class="email-button">Send*</button>
                            <button type="reset" class="email-button">Reset</button>
                        </form>
                        <output id="response">
                            <!-- Здесь будет отображаться результат -->* Send your message
                        </output>
                    </div>
                </div>
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
                <button class="footer_button" id="button4">Send an Email</button>
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
        addSmoothScroll('button1', 'email-section');
        addSmoothScroll('button2', 'email-section');
        addSmoothScroll('button3', 'email-section');
        addSmoothScroll('past_to_email', 'email-section');
        addSmoothScroll('up-from-email-form', 'header');
        addSmoothScroll('button4', 'task');

    </script>
</body>

</html>
