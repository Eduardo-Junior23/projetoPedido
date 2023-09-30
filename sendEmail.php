<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="textContainer">
    <h1>Ops! Parece que ocorreu um erro</h1>
    <h3>Alguém esqueceu de perguntar algo</h3>

    <img src="imagemErro.png">
    <?php

      $headers = "MIME-Version: 1.1\r\n";
      $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
      $headers .= "From: drdandre@gmail.com\r\n"; // remetente
      $headers .= "Return-Path: drdandre@gmail.com\r\n"; // return-path
      $envio = mail("drdandre@gmail.com", "Assunto", "Texto", $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>

  </div>
  <script src="script.js"></script>

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  --
</body>

</html>