<?php
    $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Message from Site:</b>\n".$content;
        $apiToken = "6659806760:AAGDIkF6VS0cnxfay6ajh5X_3BmHD2uvMGA";
        $data = [
            'chat_id' => '@+7QyAKsvA2v82Yjdk',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
    }
?>