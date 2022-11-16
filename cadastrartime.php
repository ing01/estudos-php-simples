<?php
    include ("time.php");
?>

<html>
    <head>
        <title>Funções Time</title>
    </head>
    <body>
        <?php
            if (isset($_POST['Cadastrar'])){
                $nome = $_POST['nome'];
                $tecnico = $_POST['tecnico'];
                $presi = $_POST['presi'];
                $ano = $_POST['ano'];

                $time = new Time(0, $nome, $tecnico, $presi, $ano);
                $time->inserir();

            }
            if (isset($_POST['Alterar'])){
                $nome = $_POST['nome'];
                $tecnico = $_POST['tecnico'];
                $presi = $_POST['presi'];
                $ano = $_POST['ano'];

                $time = new Time(0, $nome, $tecnico, $presi, $ano);
                $time->alterar();

            }
            if (isset($_POST['Listar'])){
                $nome = $_POST['nome'];
                $tecnico = $_POST['tecnico'];
                $presi = $_POST['presi'];
                $ano = $_POST['ano'];

                $time = new Time(0, $nome, $tecnico, $presi, $ano);
                $time->listar();
            }
            if (isset($_POST['Consultar'])){
                $nome = $_POST['nome'];
                $tecnico = $_POST['tecnico'];
                $presi = $_POST['presi'];
                $ano = $_POST['ano'];

                $time = new Time(0, $nome, $tecnico, $presi, $ano);
                $time->consultar(0, $nome, $tecnico, $presi, $ano);

            }
            if (isset($_POST['Excluir'])){
                $nome = $_POST['nome'];
                $tecnico = $_POST['tecnico'];
                $presi = $_POST['presi'];
                $ano = $_POST['ano'];

                $time = new Time(0, $nome, $tecnico, $presi, $ano);
                $time->excluir();
            }
            else {
                echo "Acesse o formulário para cadastro." . "<br>";
                echo "<a href='index.html'>Formulário</a>";
            }
        ?>
    </body>
</html>