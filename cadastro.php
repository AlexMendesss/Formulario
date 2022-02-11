<?php
include ('conexao.php');
    if (isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $area = $_POST['devweb'];
        $senioridade = $_POST['senioridade'];
        $tecnologia = $_POST['tecnologia'];
        $experiencia =$_POST['experiencia'];
        
        foreach ($tecnologia as $dados_tec){
            $sql = "insert into cadastro_dev(nome, sobrenome, email, atuacao, senioridade, linguagem, experiencia) values('".$nome."', '".$sobrenome."', '".$email."', '".$area."', '".$senioridade."', '".$dados_tec."', '".$experiencia."')";

            $query = mysqli_query($conectar, $sql);
        }

        if ($query) {
            echo ("Cadastro feito com sucesso!!");
        }else{
            echo ("Erro ao cadastrar!");
        }
    }
?>