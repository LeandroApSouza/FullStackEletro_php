<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

// criar a coxexão
$conn = mysqli_connect($servername, $username, $password, $database);

// verificar a conexão
if (!$conn) {
    die(" A conexão ao BD falhou:".mysqli_connect_erro());
    }

if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['cidade']) && isset($_POST['telefone']) && isset($_POST['nome_produto']) && isset($_POST['quantidade'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];

    //echo '$nome_cliente', '$endereço','$Nº_Complemento','$bairro','$cidade','$telefone_cliente';

    $sql ="insert into pedido (nome,endereco,cidade,telefone,nome_produto,quantidade) values ('$nome','$endereco','$cidade','$telefone','$nome_produto','$quantidade')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE .html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> pedido - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel=" stylesheet" href="./css/estilo.css">

</head>

<body>

    <!--inicio do menu principal-->

    <?php
    include("menu.html");   
    ?>
    <!--fim do menu principal-->

<!--inicio formulario-->
   
                <h1>E só pedir...E receber em casa</h1>
    <!--<form method="post" action="pedidos.php">
    Nome:<br>
    <input type="text" name="nome" sytle="width:500px"><br>
    Endereço:<br>
    <input type="varchar" name="endereco" style="width:500px"><br>
    cidade:<br>
    <input type="varchar" name="cidade" style="width:500px"><br>
    telefone:<br>
    <input type="bigint" name="telefone" style="width:500px"><br>
 Nome:<br>
    <input type="varchar" name="nome" sytle="width:500px">


-->
       
    
    <div id="formulario">

<form method="post" action="">
    <br>
    <div>
         <label for="nome">Nome: </label>
        <input type="varchar" name="nome"  placeholder="Ex: Ana Luiza de Souza" required size="100">    
          
    </div>
    <br>
    <div>
        <label for="endereco">Endereço: </label>
        <input type="varchar" name="endereco"  placeholder="Ex: Rua Maria Marcolina, 123 - Brás - SP" required size="100">
    </div>
    <br>
    <div>
        <label for="cidade">cidade:</label>
        <input type="varchar" name="cidade" placeholder="Ex: Diadema - SP" required size="100">
    </div>
    <br>
    <div>
        <label for="telefone">telefone:</label>
        <input type="bigint" name="telefone" placeholder="Ex: xxxx-xxxx" required size="20">
    </div>
    <br>
    <div>
                <select name="nome_produto">
                    <option>Geladeira  Frost Free Side Inverse 540 litros</option>
                    <option>Geladeira Side Inverse 420 litros</option>
                    <option>Geladeira Frost Free Side Inverse 440 litros</option>
                    <option>Geladeira Frost Free Side Inverse 520 litros</option>

                    <option>Cooktoop Bosch 5 bocas cor preto</option>
                    <option>Cooktoop Consul 5 bocas cor marrom</option>
                    <option>Cooktoop Phico 5 bocas cor azul</option>
                  

                    <option>Fogão Atlas Agile 5 bocas acendimento automáticos</option>
                    <option>Fogão Fenix 5 bocas acendimento Mesa de vidro</option>
                    <option>Fogão Itatiaia 5 bocas acendimento automáticos</option>
                    <option>Fogão Consul 5 bocas acendimento automáticos </option>


                    <option>Geladeira Brastemp Frost Free Side Inverse 440 litros</option>
                    <option>Geladeira Eletrolux Frost Free Side Inverse 520 litros</option>
                    <option>Geladeira Brastemp Frost Free Side Inverse 540 litros</option>
                    <option>Geladeira Boch side inverse 420 litros</option>
   
                    <option>Lavadora de Roupas Brastemp 12 kg </option>
                    <option>Lavadora de Roupas Eletrolux 10 kg</option>
                    <option>Lavadora de Roupas Colomaq 12 kg </option>
                    <option>Lavadora de Roupas Consul 10 kg</option>

                    <option>Liquitificador Arno Maxs com filtro 1,7 litros </option>
                    <option>Liquitificador Philco 2 litros </option>
                    <option>Liquitificador Mundial turbo com filtro 2,7 litros </option>
                    <option>Liquitificador Maroly 2 litros </option>
   
                    <option>MIcro Ondas Eletrolux Inox Digital 20  litros  </option>
                    <option>MIcro Ondas LG Solo 30  litros </option>
                    <option>MIcro Ondas Consul Inox 32 litros </option>
                    <option>MIcro Ondas Philco 21  litros </option>
   
                    
               
                </select>

                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" value="1" min="1" max="10">
                <input type="int">

<input type="submit" name="submit" value="Enviar"><br>
    </form>

        
</body>

</html>