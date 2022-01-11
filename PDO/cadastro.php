<?php include("Includes/Header.php") ; ?>
  <div class="Content">
    <?php 
      include("class/classConexao.php");
      include("class/classCrud.php");
    ?>
    <div class="Resultado"></div>
    <div class="Formulario">
      <h1 class="Center">Cadastro</h1>
      <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/controllerCadastro.php">
      <div class="FormularioInput">
        Nome: <br>
        <input type="text" id="Nome" name="Nome">
      </div>
      <div class="FormularioInput">
        email: <br>
        <input type="text" id="email" name="email">
      </div>
      <div class="FormularioInput">
        CPF: <br>
        <input type="text" id="cpf" name="cpf">
      </div>
      <div class="FormularioInput">
        Data de Nascimento: <br>
        <input type="number" id="data" name="quantity" min="1930" max="2004">
      </div>
      <div class="FormularioInput FormularioInput100 Center">
        <input type="submit" value="Cadastrar">
      </div>
      </form>
    </div>
  </div>

  <?php include("Includes/Footer.php") ; ?>
  

