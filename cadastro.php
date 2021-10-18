<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar clientes</title>
</head>

<body>
    <?php
    //PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
    $host= 'localhost';
    $db= 'cliente';
    $senhadb= '123456';
    $userdb = $db;
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $name = $_POST ["name"]; //atribuição do campo "nome" vindo do formulário para variavel
    $email = $_POST ["email"]; //atribuição do campo "email" vindo do formulário para variavel
    $phone = $_POST ["phone"];
    $address = $_POST ["address"];
    
    $conexao = mysqli_connect($host,$db, $senhadb);
    if (!$conexao) die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conexao));
    //conectando com a tabela do banco de dados
    $banco = mysqli_select_db($conexao, $db);
    if (!$banco)  die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error($conexao));
    $query = "INSERT INTO `clientes` ( `nome` , `email` , `telefone` , `endereço`)
    VALUES ('{$name}', '{$email}', '{$phone}', '{$address}')";
    mysqli_query($conexao, $query); 
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

    ?>

    <table border="1"> 
        <tr> 
          <td>Código</td> 
          <td>Nome</td> 
          <td>E-mail</td> 
          <td>Telefone</td> 
          <td>Enderço</td>
        </tr>
        <?php
            $sql = mysqli_query($conexao, "SELECT * FROM `clientes`;");
             while($dado = $sql->fetch_array()) { 
        ?> 
        <tr> 
        <td><?php echo $dado['id']; ?></td>
          <td><?php echo $dado['nome']; ?></td>
          <td><?php echo $dado['email']; ?></td> 
          <td><?php echo $dado['telefone']; ?></td> 
          <td><?php echo $dado['endereço']; ?></td>  
        </tr> 
        <?php } ?> 
      </table>
      <input type="button" value="Voltar" onClick="history.go(-1)"> 
</body>
</html>