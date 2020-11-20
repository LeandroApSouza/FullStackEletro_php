
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

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    //echo $nome, $msg;

    $sql ="insert into contatos (nome, msg) values ('$nome','$msg')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE .html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> Contatos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/estiloContatos.css">
    <link rel=" stylesheet" href="./css/estilo.css">
    <style>
        #lateral {
            border: 2px solid black;
        }

        h1 {
            color: blanchedalmond;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>

<!--1 bloco-->

<body class="fundoatendente">

    <!--inicio do menu principal-->

    <?php
    include("menu.html");   
    ?>
    <!--fim do menu principal-->



    <div>
        <!--3 bloco-->
        <h1 style="color: blue; font-family: sans-serif; position: relative;top: 1%;left: 45%;">Contatos</h1>
    </div>
    <hr>
    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
                   
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
        
        <h1 style="color: blue; font-family: sans-serif; position: relative;top: 1%;left: 45%;">Pedido on-line</h1>
       <!-- <h1 style="position: relative;top: 1%;left: 45%;"><a href="pedidos.php"><padding></padding><b> clique aqui!-->
 
    
    </div>
    <br>
        <hr>
    </div>
    <!--4 bloco-->
    <div id="lateral">
        <ul class="textoDaCaixasContatos after">
            <li class="formatoDaCaixaContatos estiloDasCaixasContatos">
                <h1>e-mail</h1><br><br><b>fullstack.eletro@eltro.com.br</b><br><br><br><br>
            </li>

            <li class="formatoDaCaixaContatos estiloDasCaixasContatos">
                <h1>Telefones</h1><br><br><br><b>0800-456-7272<br>zap (11)96578-5656<br>Tel: (11) 57885-223266</b>
            </li>

            </li>
            <li class="formatoDaCaixaContatos estiloDasCaixasContatos">
                <h1>Queremos te ouvir</h1>
    <!--formulario-->
                <form method="post" action="">
                Nome:<br>
                <input type="text" name="nome" sytle="width:500px"><br>
                Mensagem:<br>
                <input type="text" name="msg" style="width:500px"><br>
                <input type="submit" name="submit" value="Enviar"><br>
                </form>

                <div>
        
          
        </div>

        </ul>
    </div>
    <hr>


</body>

</html>