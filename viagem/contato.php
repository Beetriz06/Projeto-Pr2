<?php 
    include_once'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - [Nome do seu blog]</title>
    <link rel="stylesheet" href="css\estilo.css"> </head>
<body>   
        <?php 
            include"cabeca.php";
    ?>

    <section class="contato">
        <div class="container">
            <div class="box-contato">
                <h2> Tem alguma dúvida, sugestão ou quer propor uma parceria? Entre em contato!</h2>
                <?php
                    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                    if(!empty($dados['AddMsgCont'])){
                    // var_dump($dados);
                        $dados = array_map('trim', $dados);
                        if(in_array('',$dados)){
                            echo "<p style ='color: #f00;'>Erro: Necessário preencher todos os campos!</p>";
                        }
                        /*if(empty($dados['nome'])){
                            echo "<p style ='color: #f00;'>Erro: Necessário preencher o campo nome!</p>";
                        }elseif(empty($dados['email'])){
                            echo "<p style ='color: #f00;'>Erro: Necessário preencher o campo email!</p>";
                        }elseif(empty($dados['assunto'])){
                            echo "<p style='color: #f00;'>Erro: Necessário preencher o campo assunto!</p>";
                        }elseif(empty($dados['conteudo'])){
                            echo "<p style='color: #f00;'>Erro: Necessário preencher o campo conteúdo!</p>";}*/
                        else{

                            $query_contato = "INSERT INTO contato (nome, email, assunto, conteudo) VALUES (:nome, :email, :assunto, :conteudo)";
                            $add_contato = $conn->prepare($query_contato);
                            $add_contato->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                            $add_contato->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                            $add_contato->bindParam(':assunto', $dados['assunto'], PDO::PARAM_STR);
                            $add_contato->bindParam(':conteudo', $dados['conteudo'], PDO::PARAM_STR);

                            $add_contato->execute();

                            if($add_contato->rowCount()){
                                unset($dados);
                                echo" <p style='color: #14424B;
                                font-size: 2rem;'> Mensagem enviada com sucesso! </p> ";
                            }else{
                                echo" <p style='color: #764134;
                                font-size: 2rem;'> Erro: Mensagem não enviada com sucesso! </p> ";
                            }
                        }
                }
                ?>

        <form method="POST" action="">
            <label> Nome:</label>
            <input type="text" name="nome" placeholder="Nome Completo" value="<?php  if(isset($dados['nome'])){
                echo $dados['nome'];}?>"required> <br> <br>
            
            <label> Email:</label>
            <input type="email" name="email" placeholder="Seu melhor email" value="<?php  if(isset($dados['email'])){
                echo $dados['email'];}?>" required> <br> <br>

            
            <label> Assunto:</label>
            <input type="text" name="assunto" placeholder="Assunto da mensagem" value="<?php  if(isset($dados['assunto'])){
                echo $dados['assunto'];}?>"required> <br> <br>

            
            <label> Conteúdo:</label>
            <textarea name="conteudo" rows="3" cols="30" placeholder="Conteúdo da mensagem" required> <?php  if(isset($dados['conteudo'])){
                echo $dados['conteudo'];}?> </textarea> <br> <br>

            <input type="submit" name="AddMsgCont" value="Enviar"> <br> <br>

        </form>
             </div>
            </div>

    </section> 

    <?php 
            include"rodape.php";
    ?>
</body>
</html>