
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

?>

<!DOCTYPE .html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>

    <!--inicio do menu principal-->
   
    <?php
    include("menu.html");
    ?>
    <!--final do menu principal-->

    <hr>
    <h1 style="color: blue; font-family: sans-serif; position: relative;top: 1%;left: 45%;"> Produtos</h1>
    <br>
    <br>

    <hr>
    
    <table>
        <tr>
            <!--lista dos produtos-->
            <td>
                <ul style="margin-left: 40%;">
                  <p> CATEGORIA:<p>
                    <li><a href="todas_as_geladeiras.php">Geladeira</a></li>
                    <li><a href="todos_os_cooktoops.php">Cooktoops</a></li>
                    <li><a href="todas_as_lavadoras.php">Lavadouras</a></li>
                    <li><a href="todas_as_tv.php">Televisores</a></li>
                    <li><a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
                    <li><a href="todos_os_fogoes.php">Fogões</a></li>
                    <li><a href="todos_os_microondas.php">Micro Ondas</a></li>
                </UL>
            </td>
    </table>
   
  <!--consultar os dados-->
  <section class="produtos">
      <div class="todos-produtos">
  <?php
        //$sql = " select * from produtos";//
        $sql = "select * from produtos";
        $result = $conn->query($sql);

    //  ferificar se tem produto cadastrado
    if ($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
       /*<?php echo $rows["categoria_produto"];?> */
    ?>

<!--receber inf. do banco de dados-->

            <div class="<?php echo $rows["produto"];?>" style= "display:inline-block" width="25%" align="center" valign="bottom">
                <img src="<?php echo $rows["imagem_produto"];?>" width="120px"><br>
                <font face="Arial" size="2"><?php echo $rows["categoria_produto"];?></a></font>
             
                <hr>
            </div>
    
    
         
    <?php
        }
    } else {
        echo "Nenhum produto cadastrado";
    }
    ?>

</section>
</div>
    <br>
    <br>

    <!--formas de pagamentos-->
    <hr>

    <footer id="rodape">
        <td width="20%" align="center" valign="top">
            <img src="./imagens/logcartaocredito.png" alt="forma de pagamento"><br>
            &copy Recolde Pro
    </footer>

</body>

</html>