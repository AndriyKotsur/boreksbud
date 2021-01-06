<?php
    define('PROJECT_EMAIL', 'info@boreksbud.com.ua');
    define('PROJECT_SUBJECT', 'Нова заявка із сайта boreksbud.com.ua');
    define('PROJECT_NAME', 'boreksbud.com.ua');

    $method = $_SERVER['REQUEST_METHOD'];
    $_POST = json_decode(file_get_contents("php://input"), true);

    if ($method !== 'POST') {
        return [
            'success' => false,
            'msg' => 'Invalid request method'
        ];
    }

    extract($_POST);

    if (empty($name) || empty($phone) || empty($email)) {
        return [
            'success' => false,
            'msg' => 'Invalid field values'
        ];
    }

    function adopt($text)
    {
        return '=?UTF-8?B?' . Base64_encode($text) . '?=';
    }

    function msgTemplate($name, $phone, $email, $request)
    {
        return "<h2 style='font-size: 24px; font-weight: 700;'>Вам прийшов новий запит від користувача: {$name}</h2>

                <table style='width: 100%;'>
                    <tr>
                        <td style='background-color: #538ac1; padding: 20px;'></td>
                        <td style='background-color: #538ac1; padding: 20px;'></td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'><b>Ім'я</b></td>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'>{$name}</td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'><b>Номер телефона</b></td>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'>{$phone}</td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'><b>Електронний адрес</b></td>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'>{$email}</td>
                    </tr>
                    <tr style='background-color: #f8f8f8;'>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'><b>Повідомлення</b></td>
                        <td style='padding: 10px; border: #e2dddd 1px solid;'>{$request}</td>
                    </tr>
                </table>";
    }

    $message = msgTemplate($name, $phone, $email, $request);

    $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: ' . adopt(PROJECT_NAME) . ' <' . PROJECT_EMAIL . '>' . PHP_EOL .
        'Reply-To: ' . PROJECT_EMAIL . '' . PHP_EOL;

    mail(PROJECT_EMAIL, adopt(PROJECT_SUBJECT), $message, $headers);