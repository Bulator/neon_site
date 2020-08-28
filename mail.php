<?php

$receptien = "ahtyamov99@gmail.com";
$sitename = "neonjoy.ru";

$phone = trim($_POST["phone"]);
$message = "Телефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($receptien, $pagetitle, $message, "Content-type: text/plan; charset=\"utf-8\"\n From: $receptien");

?>