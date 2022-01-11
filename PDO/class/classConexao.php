<?php
abstract class classConexao{
  protected function conectaDB()
  {
    try{
        $con = new PDO("mysql: host=localhost ; dbname=Crud", "root", "");
        return $con;
    }catch(PDOException $Erro){
        return $Erro -> getMessage();
    }
  }

}
?>