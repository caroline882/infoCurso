<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type= "text/javascript" src="./js/calculadora.js"  ></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>
<body>
<form class="center" action="/calculadora.php">
  <label for="numero">Calculadora online! </label><br>
  <label for="numero"> </label><br>
  <label for="numero">Digite um número:</label><br>
  <input class="php" type="text" id="numero" name="numero" ><br>
  <label for="numero"> </label><br>
  <label class="carol" for="numero2">Digite outro número:</label><br>
  <input class="php2" id="numero2" name="numero2" ><br><br>
  <label for="operação">Choose:</label>
  <select id="operação" name="operação" >
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="/">/</option>
  <option value="*">*</option>
  </select> 
  <input type="button" value="btnCalcular">
  
</form>
</body>
</html>