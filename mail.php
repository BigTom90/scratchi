<?php

$recepient = "info@scratchidesign.com;
$sitename = "Scratchi Design web site";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $phone \nMessage: $text";


$pagetitle = "New Message from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>