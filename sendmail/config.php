<?php
$mailto = "sam4ik010@gmail.com";
$charset = "UTF-8";
$subject = $_POST['posRegard'];
$content = "text/plain";
$message = $_POST['posText'];
$statusError = "";
$statusSuccess = "";
$errors_name = '������� ���� ���';
$errors_mailfrom = '������� ���� E-mail �����';
$errors_incorrect = '��������� ��������� ��� E-mail �����';
$errors_message = '�������� ����� ������ ���������';
$errors_subject = '������� ���� ���������';
$captcha_error = '��������� ������������ ����� ��������� ����';
$send = '���� ��������� ������� ����������';
?>