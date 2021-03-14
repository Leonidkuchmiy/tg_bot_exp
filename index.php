$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);
//('1681935656:AAGG7bpYJFly7eMWpGnondSOrguLtT27mLo'); //Устанавливаем токен, полученный у BotFather
   
