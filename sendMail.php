<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$productName = $_POST['product-title'];
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$productName = htmlspecialchars($productName);
$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);
$productName = urldecode($productName);
$name = trim($name);
$tel = trim($tel);
$email = trim($email);
$productName = trim($productName);

if (mail("example@mail.ru", "Покупка товара", "Имя:".$name."Телефон".$tel.". Email: ".$email."Название".$productName ,"\r\n"))
 {     echo '<div>
               <h2>Сообщение успешно отправлено</h2>
               <h3>"Покупка товара"</h3>
               <h5>Имя</h5>'.$name.'
               <h5>Телефон</h5>'.$tel.'
               <h5>Email</h5>'.$email.'
               <h5>Название</h5>'.$productName.'
            </div>';
} else {
    echo "при отправке сообщения возникли ошибки";
}?>