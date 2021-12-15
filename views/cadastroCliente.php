<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="./css/estilo.css">-->
</head>
<body>
  <div class="container">

     <form class="center" action="/controller/cadastro.form-control">
  
     <h5>Cadastro!</h5>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-5">
          <label for="nome">Nome:</label><br>
          <input class="form-control btn btn-outline-success" type="text" id="nome" name="nome" >
        </div>

        <div class="col-lg-3 col-md-5">
          <label for="Sobrenome">Sobrenome:</label><br>
          <input class="form-control btn btn-outline-success" type="text" id="Sobrenome" name="Sobrenome" >
        </div>

        <div class="col-lg-2 col-md-2">
          <label for="dataNasc">Data de nascimento:</label><br>
          <input class="form-control btn btn-outline-success" type="text" id="dataNasc" name="dataNasc" >
        </div>
      </div>

      <div class= "row justify-content-center">

        <div class="col-lg-3 col-md-3">
          <label for="email">E-mail:</label><br>
          <input class="form-control btn btn-outline-success" type="email" id="email" name="email" >
        </div>

        <div class="col-lg-3 col-md-4">
          <label for="endereco">Endereço:</label><br>
          <input class="form-control btn btn-outline-success" type="endereco" id="endereco" name="endereco" >
        </div>

        <div class="col-lg-2 col-md-4">
          <label for="cidade">Cidade:</label><br>
          <input class="form-control btn btn-outline-success" type="cidade" id="cidade" name="cidade" >
        </div>
      </div>
           
  
      <div class= "row justify-content-center">
  
      <div class="col-lg-2 col-md-3">
         <label for="estado">Estado:</label><br>
         <input class="form-control btn btn-outline-success" type="estado" id="estado" name="estado" ><br>
        </div>
     
      
       <div class="col-lg-3 col-md-4">

         <label for="nomedousuario">Nome do Usuário:</label><br>
         <input class="form-control btn btn-outline-success" type="nomedousuario" id="nomedousuario" name="nomedousuario" ><br>
       </div>
      
       <div class="col-lg-3 col-md-4">
         <label for="profissao">Profissão:</label><br>
         <input class="form-control btn btn-outline-success" type="profissao" id="profissao" name="profissao" ><br>
        </div>        
      </div>
  
      </select> 

      <div class="row justify-content-center">
  
       <div class= "col-lg-3 col-md-5 cold-sm-12 col-xs-12">
      
       <button class= "btnBuscarDados form-control btn btn-primary" type="button">Cadastrar</button> 
  
    </form>
  </div>
</body>
</html>