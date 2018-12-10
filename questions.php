<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questions and Comments</title>
  </head>
  <body>
    <h3> Your message has been sent</h3>
<?php

    if(isset($_POST["submit"])){
    $Emailacct =$_POST["email"];
    $where=$_POST["hearmefrom"];
    $skill=$_POST["skills"];
    $text=$_POST["textarea"];

    $mailto="kacheng148@gmail.com";
    $subjectEmail="Hello: you got an email from $Emailacct";
    $messageemail="You have received an email from your website".$Emailacct
    ."<br/>".$text;

    mail($mailTo, $subjectEmail, $text, $where);
    header("Location:thankyou.html");
    }
     ?>
  </body>
</html>
