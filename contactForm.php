<?php
    if(isset($_POST['nome'])&&
       isset($_POST['telefone'])&&
       isset($_POST['email'])&&
       isset($_POST['empresa'])&&
       isset($_POST['mensagem'])
       )   {
                //$var_id = $_POST['id']; id é auto_increment
                $var_nome = $_POST['nome'];
                $var_telefone = $_POST['telefone'];
                $var_email = $_POST['email'];
                $var_empresa = $_POST['empresa'];
                $var_mensagem = $_POST['mensagem'];
                
                // echo "<p>email:$var_email</p>";
            
                require_once "conexao.php";
                try
                    {   
                        //executar o insert
                        $sql="insert into contato_form (nome, telefone, email, empresa, mensagem)
                        values ('$var_nome', '$var_telefone', '$var_email', '$var_empresa', '$var_mensagem')";
                        $query=$conexao->prepare($sql);
                        $query->execute();
                        $rs = $conexao->lastInsertId()
                            or die(print_r($query->errorInfo(), true));
                    
                        

                        //limpar campos 
                        $var_nome = "";
                        $var_telefone = "";
                        $var_email = "";
                        $var_empresa = "";
                        $var_mensagem = "";

                        //listar 
                        /*
                        $sql="select * from email_newsletter";
                        $resultado = $conexao->query($sql);
                        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($dados as $linha) {  //pega cada registro do array para mostrar nas tabelas
                            echo "<p>id: $linha[id] - $linha[email] </p>";
                        } */
                    }
                    catch (PDOException $i)
                    {
                        //se houver exceção, exibe
                        die("Erro: <code>" . $i->getMessage() . "</code>");
                    }
                    $alert_sucesso = "<h6>Recebemos seu contato!</h6>";
                // echo "<h2>Para visualizar todos clique <a href='listarnotas.php'> aqui</a>.</h2>";
            }//fim do if

    else
        echo "<p>Preencha os campos do formulário</p>";
    ?>