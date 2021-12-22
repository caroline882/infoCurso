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
<br />
<br />

<div class="container">

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Cadastrar!
  </button>
   
   <table id="idTabelaClientes" class="table table-responsive tble-striped table-hover">
     <thead>
       <tr>
         <th>
           Nome
         </th>
         <th>
           Sobrenome
         </th>
         <th>
           Data de Nascimento
         </th>
         <th>
           E-mail
         </th>
         <th>
           Endereço
         </th>
         <th>
           Cidade
         </th>
         <th>
           Estado
         </th>
         <th>
           Nome do usuário
         </th>
         <th>
           Profissão
         </th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>
           Caroline
         </td>
         <td>
           Tremarin Araldi
         </td>
         <td>
           08/01/2002        
         </td>
         <td>
           tremarincaroline8@gmail.com
         </td>
          Rua Candido Costa
        </td>
        <td>
          BG
        </td>
        <td>
          RS
        </td>
        <td>
          Caroline
        </td>
        <td>
          TI
        </td>
       </tr>
     </tbody>
   </table>

</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastro do Cliente!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="center" action="/controller/cadastro.form-control">
  
        <h5></h5>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-5">
            <label for="nome">Nome:</label><br>
            <input class="form-control btn btn-outline-success" type="text" id="nome" name="nome" >
          </div>

          <div class="col-lg-4 col-md-4">
            <label for="Sobrenome">Sobrenome:</label><br>
            <input class="form-control btn btn-outline-success" type="text" id="Sobrenome" name="Sobrenome" >
          </div>

          <div class="col-lg-3 col-md-4">
            <label for="dataNasc">Data de nascimento:</label><br>
            <input class="form-control btn btn-outline-success" type="text" id="dataNasc" name="dataNasc" >
          </div>
        </div>

        <div class= "row justify-content-center">

          <div class="col-lg-4 col-md-4">
            <label for="email">E-mail:</label><br>
            <input class="form-control btn btn-outline-success" type="email" id="email" name="email" >
          </div>

          <div class="col-lg-3 col-md-4">
            <label for="endereco">Endereço:</label><br>
            <input class="form-control btn btn-outline-success" type="endereco" id="endereco" name="endereco" >
          </div>

          <div class="col-lg-3 col-md-4">
            <label for="cidade">Cidade:</label><br>
            <input class="form-control btn btn-outline-success" type="cidade" id="cidade" name="cidade" >
          </div>
        </div>
              

        <div class= "row justify-content-center">

        <div class="col-lg-2 col-md-2">
            <label for="estado">Estado:</label><br>
            <input class="form-control btn btn-outline-success" type="estado" id="estado" name="estado" ><br>
          </div>
        
        
          <div class="col-lg-4 col-md-5">

            <label for="nomedousuario">Nome do Usuário:</label><br>
            <input class="form-control btn btn-outline-success" type="nomedousuario" id="nomedousuario" name="nomedousuario" ><br>
          </div>
        
          <div class="col-lg-4 col-md-5">
            <label for="profissao">Profissão:</label><br>
            <input class="form-control btn btn-outline-success" type="profissao" id="profissao" name="profissao" ><br>
          </div>        
        </div>

        </select> 

               
          

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary"data-bs-dismiss="modal">Salvar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>