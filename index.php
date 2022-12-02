<?php 
    $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $nums = ['0','1','2','3','4','5','6','7','8','9'];
    $specialChars = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];

  var_dump($letters);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php
  echo $letters[1];
  echo $nums[1];
  echo $specialChars[1];
  ?></h1>
  
</body>
</html>