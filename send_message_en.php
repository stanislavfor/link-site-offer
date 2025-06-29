<?php
// Подключение PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru'; // SMTP сервер Mail.ru
        $mail->SMTPAuth = true;
        $mail->Username = '<your_email_address>'; // Ваш почтовый ящик
        $mail->Password = '<your_smtp_password>'; // Пароль SMTP от вашего почтового ящика
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Шифрование соединения
        $mail->Port = 587; // Порт

        // Установка кодировки
        $mail->CharSet = 'UTF-8'; // Кодировка письма

        // Настройка отправителя и получателя
        $mail->setFrom('<your_email_address>', 'Сообщение с сайта'); // Отправитель
        $mail->addAddress('<your_email_address>'); // Получатель

        // Содержание письма
        $mail->isHTML(true);
        $mail->Subject = "Новое сообщение от $name";
        $mail->Body = "
            <p><strong>Имя:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Сообщение:</strong></p>
            <p>$message</p>
        ";

        // Отправка письма
        $mail->send();
        echo "The message was sent successfully.";
    } catch (Exception $e) {
        echo "The message has not been sent. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
