<?php
    class Banco{
        const HOST = "localhost";
        const USER = "root";
        const PASS = "";
        const DBNAME = "futebol";

        private $conexao;
        private $erro;

        public function __construct()
        {
            $this->erro = "";
            $this->conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USER, self::PASS);

            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   
            if ($this->conexao == null){
                $this->erro = "Não foi possível conectar ao banco.";
            }
        }

        public function getErro(){
            return $this->erro;
        }

        public function executar($comandoSQL){
            $this->conexao->exec($comandoSQL);
        }
    
        public function selecionar($sql)
        {
            $z = $this->conexao->query($sql)->fetchAll();
            return $z;
        }

    }
?>