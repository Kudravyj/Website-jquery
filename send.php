<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
ini_set('display_errors','On');
error_reporting('E_ALL');
//echo $fio;
//echo "<br>";
//echo $email;
ini_set('display_errors','On');
error_reporting('E_ALL');
if(mail("sam4ik010@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"sam4ik010@gmail.com \r\n")){
    header('location:sad.html?msg=successfull');
}
{
        echo "coś poszło nie tak";
}?>
<style type="text/css">
  body {
    font-family: 'Muli', sans-serif;
    font-weight: bold;
    background-size: cover;
	line-height: inherit;
    font-size:22px;
    text-align: 20% left;
    background-image: url(../images/Group_328.png); }
</style>
<section>

    <div>
        <h1>Dziękuje. Za chwilę otrzymasz od nas prezent!</h1>
    </div>
</section>