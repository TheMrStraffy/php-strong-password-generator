<?php 
function generatePassword(){

  $letters = range('a','z');
  $upperCaseLetters = range('A','Z');
  $nums = range(0,9);
  $specialChars = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];
  $ALL_CHARS = array_merge($letters, $upperCaseLetters, $nums, $specialChars);
    $newString = implode($ALL_CHARS);
    
    if(!empty($_GET['pswlen']) && $_GET['pswlen'] <= 18){
      $passwordGenerated = str_shuffle($newString);
  
      echo substr($passwordGenerated,0,$_GET['pswlen']);
    } else{
      echo 'insert a number between 1 and 18';
    }
}
?>