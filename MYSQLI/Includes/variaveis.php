<?php
if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id=0; }
if(isset($_POST['Nome'])){ $Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nome'])){ $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nome=""; }
if(isset($_POST['email'])){ $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['email'])){ $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $email=""; }
if(isset($_POST['cpf'])){ $cpf=filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['cpf'])){ $cpf=filter_input(INPUT_GET,'cpf',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $cpf=""; }
?>