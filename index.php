<?php 


    $letters = range('a','z');
    $upperCaseLetters = range('A','Z');
    $nums = range(0,9);
    $specialChars = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','='];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Password Generator</title>
</head>
<body>

  <div class="container">
  <h1>Password Generator</h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
  <input type="number" name="pswlen" id="pswlen" value="">
  <label for="pswlen">Lunghezza Password</label>
  <button type="submit">Genera Password</button>
</form>
<?php 

  $ALL_CHARS = array_merge($letters, $upperCaseLetters, $nums, $specialChars);
  $newString = implode($ALL_CHARS);
  
  if(!empty($_GET['pswlen']) && $_GET['pswlen'] <= 18){
    $passwordGenerated = str_shuffle($newString);

    echo substr($passwordGenerated,0,$_GET['pswlen']);
  } else{
    echo 'insert a number between 1 and 18';
  }
  
  
  
?>
  </div>
</body>
</html>