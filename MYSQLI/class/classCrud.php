<?php
class classCrud extends classConexao{

    #Atributos
    private $Crud;
    private $Contador;
    private $Resultado;

    #Preparação das declarativs
    private function preparedStatements($Query, $Tipos , $Parametros)
    {
        $this->countParametros($Parametros);
        $Con=$this->conectaDB();
        $this->Crud=$Con->prepare($Query);
        if($this->Contador > 0){
           $CallParametros = array();
            foreach($Parametros as $Key => $Parametro){
                $CallParametros[$Key] = &$Parametros[$Key];
            }
            array_unshift($CallParametros, $Tipos);
            call_user_func_array(array($this->Crud,'bind_param'),$CallParametros);
        }
        $this->Crud->execute();
        $this->Resultado=$this->Crud->get_result();
    }

    #Contador de parâmetros
    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    }
}

?>