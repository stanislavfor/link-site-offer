<?php
// Подключение PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $question1 = htmlspecialchars(trim($_POST['question1']));
    $question2 = htmlspecialchars(trim($_POST['question2']));
    $question3 = htmlspecialchars(trim($_POST['question3']));
    $question4 = htmlspecialchars(trim($_POST['question4']));
    $question5 = htmlspecialchars(trim($_POST['question5']));
    $question6 = htmlspecialchars(trim($_POST['question6']));
    $question7 = isset($_POST['question7']) ? $_POST['question7'] : [];
    $question8 = htmlspecialchars(trim($_POST['question8']));
    $question9 = htmlspecialchars(trim($_POST['question9']));
    $question10 = htmlspecialchars(trim($_POST['question10']));
    $question11 = htmlspecialchars(trim($_POST['question11']));

    $mail = new PHPMailer(true);
    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru'; // SMTP сервер Mail.ru
        $mail->SMTPAuth = true;
        $mail->Username = '<your_email_address>'; // Ваш почтовый ящик
        $mail->Password = '<your_smtp_password>'; // Пароль от вашего почтового ящика
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Шифрование соединения
        $mail->Port = 587; // Порт

        // Установка кодировки
        $mail->CharSet = 'UTF-8'; // Кодировка письма

        // Настройка отправителя и получателя
        $mail->setFrom('<your_email_address>', 'Сообщение с сайта'); // Отправитель
        $mail->addAddress('<your_email_address>'); // Получатель

        // Содержание письма
        $mail->isHTML(true);
        $mail->Subject = "Новое сообщение с опроса";
        $mail->Body = "
            <p><strong>Email:</strong> $email</p>
            <p><strong>1. Насколько важен для вас быстрый пользовательский интерфейс при работе с хостингом изображений? Почему?</strong></p>
            <p>$question1</p>
            <p><strong>2. Имели ли вы опыт использования онлайн-редакторов изображений? Если да, какие функции были для вас наиболее полезными? Почему именно эти функции?</strong></p>
            <p>$question2</p>
            <p><strong>3. Оцените по шкале от 1 до 5, насколько интегрированный онлайн-редактор облегчает вашу работу с графикой.</strong></p>
            <p>$question3</p>
            <p><strong>4. Насколько важно для вас иметь возможность обмениваться ссылками на изображения прямо на хостинге? Почему?</strong></p>
            <p>$question4</p>
            <p><strong>5. Насколько важна для вас возможность получать прямые ссылки на загруженные изображения? Почему именно (укажите кратко причину)?</strong></p>
            <p>$question5</p>
            <p><strong>6. Как часто вам приходится загружать изображения в Интернет для обмена ссылками или внедрения в ваши проекты?</strong></p>
            <p>$question6</p>
            <p><strong>7. Какие основные цели вы преследуете при использовании хостинга изображений?</strong></p>
            <p>" . implode(", ", $question7) . "</p>
            <p><strong>8. Какие функции пользовательского интерфейса для вас наиболее важны при загрузке и управлении изображениями?</strong></p>
            <p>$question8</p>
            <p><strong>9. По вашему мнению, насколько важна скорость загрузки и выгрузки изображений при использовании хостинга изображений?</strong></p>
            <p>$question9</p>
            <p><strong>10. Как вы оцениваете важность интегрированного онлайн-редактора изображений при выборе хостинга для изображений?</strong></p>
            <p>$question10</p>
            <p><strong>11. Какие дополнительные функции вы бы хотели видеть в хостинге изображений, чтобы сделать его более привлекательным для ваших нужд? Если нужны дополнительные функции, поясните.</strong></p>
            <p>$question11</p>
        ";

        // Отправка письма
        $mail->send();
        echo "The form was sent successfully.";
    } catch (Exception $e) {
        echo "The survey sheet has not been sent. Mistake: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
