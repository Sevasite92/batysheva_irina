<html>
<body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
   *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

</style>
</head>
<h2>Спасибо за заказ!<br> Мы свяжемся с Вами в ближайшее время!</h2>
</script>
</body>
</html>
<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];



$db_host = "localhost"; 
$db_user = "u0129_batysheva";
$db_password = "********"; 
$db_base = 'u0129323_batysheva'; 
$db_table = "mytable";

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result = $mysqli->query("INSERT INTO `mytable` (name,phone,email,text) VALUES ('$name','$phone','$email','$text')"); 
?>