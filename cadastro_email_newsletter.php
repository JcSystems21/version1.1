<?php
    if(isset($_POST['email'])) {
        //$var_id = $_POST['id']; id é auto_increment
       
        $var_email = $_POST['email'];
  
        
       // echo "<p>email:$var_email</p>";
       
        require_once "conexao.php";
        try
            {   
                //executar o insert
                $sql="insert into email_newsletter (nome, telefone, email, empresa, mensagem)
                values ('$var_nome', '$var_telefone', '$var_email', '$var_empresa', '$var_mensagem')";
                $query=$conexao->prepare($sql);
                $query->execute();
                $rs = $conexao->lastInsertId()
                    or die(print_r($query->errorInfo(), true));
               
                //listar 
                $sql="select * from email_newsletter";
                $resultado = $conexao->query($sql);
                $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $linha) {  //pega cada registro do array para mostrar nas tabelas
                    echo "<p>id: $linha[id] - $linha[nome] </p>";
                }
            }
            catch (PDOException $i)
            {
                //se houver exceção, exibe
                die("Erro: <code>" . $i->getMessage() . "</code>");
            }
           // echo "<h2>Para visualizar todos clique <a href='listarnotas.php'> aqui</a>.</h2>";
    }//fim do if
    else
        echo "<p>Preencha os campos do formulário
        <a href='index.html'>Clique aqui</a></p>";
    ?>