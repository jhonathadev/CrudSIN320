<?php

    class Conexao{
        //pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
        //'mysql:local=localhost;dbname=php_com_pdo'
        private $host= 'pgsql:host=localhost;port=5432;dbname=cons_odonto;user=postgres;password=123456';
        //private $dbname='trabalho_bd';
        //private $usuario='root';
        //private $senha='';


        public function conectar(){
            try{ 
                $conexao = new PDO(
                    $this->host//,
                    //$this->usuario,
                    //$this->senha
                );  
                return $conexao;
            }catch(PDOException $e){
                echo '<pre>';  // <pre> serve para formatar a string abaixo
                print_r($e);
                echo '</pre>';
            }
        }
    }
  
?>