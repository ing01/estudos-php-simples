<?php
    include ("banco.php");

    class Time{
        //atributos
        private $id;
        private $nome;
        private $tecnico;
        private $presi;
        private $ano;

        public function __construct($id, $nome, $tecnico, $presi, $ano)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->tecnico = $tecnico;
            $this->presi = $presi;
            $this->ano = $ano;
        }

        public function setid($id)
        {
            $this->id = $id;
        }
        public function getid()
        {
            return $this->id;
        }
    
        public function nome($nome)
        {
            $this->Nome = $nome;
            return $this->Nome;
        }
        public function tecnico($tecnico)
        {
            $this->Tecnico = $tecnico;
            return $this->tecnico;
        }
        public function presidente($presi)
        {
            $this->Presi = $presi;
            return $this->presi;
        }
        public function ano($ano)
        {
            $this->Ano = $ano;
            return $this->ano;
        }

        //gets e sets

        public function inserir() {
            $banco = new Banco();
            if ($banco->getErro() != ""){
                echo  $banco->getErro();
            }
                    
            $comandoSQL = "insert into times(id, nome, tecnico, presi, ano) values (0,'".$this->nome."', '".$this->tecnico."',
            '".$this->presi."', ".$this->ano.")";

           $banco->executar($comandoSQL);
           echo "Time cadastrado com sucesso!" . "<br>";
        }

        public function alterar(){
            $banco = new Banco();
            if ($banco->geterro() != "") {
                echo $banco->geterro();
            } else

            $sql = "UPDATE `times` SET `nome`='$this->nome', `tecnico`='$this->tecnico', `presi`='$this->presi', `ano`='$this->ano' 
                WHERE `nome`='$this->nome'";
            $banco->Executar($sql);
            echo "Dados alterados com sucesso!" . "<br>";
        }

        public function excluir(){
            $banco = new Banco();
            $sql = "DELETE FROM times WHERE nome = '$this->nome'";
            $banco->executar($sql);
            echo "Time excluído com sucesso!" . "<br>";
        }

        public function consultar(){
            $banco = new Banco();
            if ($banco->geterro() != "") {
                echo $banco->geterro();
            } else
           
            $sql = "SELECT * FROM times WHERE nome = '$this->nome'";

            $res = $banco->selecionar($sql);
            foreach ($res as $aux) 
            {
                echo "ID: " . $this->id = $aux['id'] . "<br>";
                echo "Nome do Time: " . $this->nome = $aux['nome'] . "<br>";
                echo "Nome do Técnico: " . $this->tecnico = $aux['tecnico'] . "<br>";
                echo "Nome do Presidente: " . $this->presi = $aux['presi'] . "<br>";
                echo "Ano da fundação: " . $this->ano = $aux['ano'] . "<br>";
                echo "<br>";
            }
        }

        public function listar(){
            $banco = new Banco();
            if ($banco->geterro() != "") {
                echo $banco->geterro();
            } else

            $sql = "SELECT * FROM times";
    
            $res = $banco->selecionar($sql);
            foreach ($res as $aux) 
            {
                echo "ID: " . $this->id = $aux['id'] . "<br>";
                echo "Nome do Time: " . $this->nome = $aux['nome'] . "<br>";
                echo "Nome do Técnico: " . $this->tecnico = $aux['tecnico'] . "<br>";
                echo "Nome do Presidente: " . $this->presi = $aux['presi'] . "<br>";
                echo "Ano da fundação: " . $this->ano = $aux['ano'] . "<br>";
                echo "<br>";
            }
        }
    }
?>