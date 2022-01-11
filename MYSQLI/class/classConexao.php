<?php
abstract class classConexao{
  protected function conectaDB()
  {
    try{
        $con=new  mysqli("localhost", "root","", "crud");
        return $con;
    }catch(Exception $Erro){
        return $Erro -> getMessage();
    }
  }

}
?>