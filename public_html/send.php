<?php
header('Content-Type: application/json');
date_default_timezone_set('Europe/Moscow');

require dirname(__DIR__).'/vendor/autoload.php';
$config = require dirname(__DIR__).'/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function getPost($index, $def='-') {
  return array_key_exists($index, $_POST) ? $_POST[$index] : $def;
}


function renderContent()
{
  $type = getPost('type', '-');
  $name = getPost('name', '-');
  $phone = getPost('phone', '-');
  $orderArr = getPost('order', []);
  // $orderArr = [
  //   ['label' => 'Мотнаж демонтаж', 'total' => '1234 руб', 'items' => ['Ремонт', 'Установка', 'Варка']],
  // ];
  $tableStyle = '
    width: 100%;
    background: #fff;
    border-collapse: collapse;
    border: 1px solid #8C8C8C;
    text-align: left;
    font: normal 14px Arial, Helvetica, sans-serif;
    color: #7D7D7D;
  ';
  $thStyle = '
    background-color: #8C8C8C;
    color:#FFFFFF;
    font-weight: normal;
    padding: 5px 10px;
    text-transform: uppercase;
  ';
  $tdStyle = '
    padding: 5px 10px;
    border: 1px solid #8C8C8C;
  ';
  $tdHStyle = $tdStyle . '
    font-weight: bold;
  ';
  $orders = '<tr><td colspan="2" style="'.$tdHStyle.'">УСЛУГИ</td></tr>';
  foreach ($orderArr as $key => $value) {
    $items = is_array($value['items']) ? '<br> - '.implode('<br> - ', $value['items']) : '';
    $orders .= ''
    .'<tr><td style="'.$tdStyle.'">'
      .$value['label']
      .$items
    .'</td><td style="'.$tdStyle.'">'
      .$value['total']
    .'</td></tr>';
  }
  if (!count($orderArr)) $orders = '';
  return ''
  .'<table style="'.$tableStyle.'">'
    .'<thead><tr><th colspan="2" style="'.$thStyle.'">'.$type.'</th></tr></thead>'
    .'<tbody>'
    .'<tr><td colspan="2" style="'.$tdHStyle.'">КЛИЕНТ</td></tr>'
    .'<tr><td style="'.$tdStyle.'">Имя</td><td style="'.$tdStyle.'">'.$name.'</td></tr>'
    .'<tr><td style="'.$tdStyle.'">Телефон</td><td style="'.$tdStyle.'">'.$phone.'</td></tr>'
    .$orders
    .'</tbody>'
  .'</table>';
}

$result = ['status' => 'null'];

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = $config['smtp.host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp.user']; // SMTP username
    $mail->Password = $config['smtp.pass']; // SMTP password
    $mail->SMTPSecure = $config['smtp.secure']; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $config['smtp.port']; // TCP port to connect to

    //Recipients
    $mail->setFrom($config['mailer.from'][0], $config['mailer.from'][1]);

    foreach ($config['mailer.to'] as $toEmail => $toName) {
      $mail->addAddress($toEmail, $toName);
    }

    //Content
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);
    $mail->Subject = 'Заявка';
    $mail->Body = renderContent();
    $mail->send();
    $result['status'] = 'Message has been sent';
} catch (Exception $e) {
    $result['status'] = 'Error: '.$mail->ErrorInfo;
}

echo json_encode($result);

/**/