<?php

/* https://api.telegram.org/bot5407859560:AAEWoLvAYEGW40wiMPG84oHZzYLlWYcfjxY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "5407859560:AAEWoLvAYEGW40wiMPG84oHZzYLlWYcfjxY";
$chat_id = "-634923754";
$arr = array(
  'Телефон: ' => $phone,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../thankyou.html');
} else {
  echo "Error";
}
?>
