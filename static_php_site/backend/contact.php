<?php

$name = $_POST['name'] ?? 'N/A';
$email = $_POST['email'] ?? 'N/A';
$subject = $_POST['subject'] ?? 'N/A';
$message = $_POST['message'] ?? 'N/A';


echo "<b>$name </b> <br>";
echo "<b>$email </b> <br>";
echo "<b>$subject </b> <br>";
echo "<b>$message </b> <br>";
