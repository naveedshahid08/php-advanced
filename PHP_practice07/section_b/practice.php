<?php
session_start();
$text =" Hello World";

/* $trimmed_text=trim($text);
echo $trimmed_text;

$str=" This is a stinr with backslashes \\ and quotes \"";
 echo stripslashes($str);

 $str1 = "This is stiring has <b>bold</b> tags";
 echo htmlspecialchars($str1);


 $password= "mypassword";
 $encrypted_passowrd=sha1($password);
 echo $encrypted_passowrd; */
$password="naveedshahid";
$hashFormat="2y$10$";
$salt="asedfasefasdfasdfasdfasdf22";
$hashFormatSalt=$hashFormat.$salt;
$encrypted_passowrd=crypt($password,$hashFormatSalt);
echo $encrypted_passowrd;

/*  $password ="naveedshahid";
 $encrypted_passowrd =crypt($password,'$2a$09$anexamplestringforsalt$');
 echo $encrypted_passowrd; */

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
