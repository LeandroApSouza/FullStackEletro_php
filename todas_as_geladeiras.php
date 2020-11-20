
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



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./css/reset.css">
    --
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/estiloRodapeProdutos.css">
    <script src="js/destaqueProduto.js"> </script>
    <script src="js/ofertas.js"> </script>
</head>

<body>


    <!--imagens dos produtos-->
  <?php
  include("submenu_produtos.html");
  ?>
 <!--inicio dos produtos-->
 </table>
    <table>
        <tr>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/novageladeira01.jpg" width="120px" id="lupa1" onmouseover="grande1()"
                    onmouseout="normal1()" />
                <br>
                <font face="Arial" size="2">Geladeira Frost Free Brastemp Side Inverse 540 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 6.389,00 </strike></font> <br>
                <button onclick="novoG1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="g1"></font>
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="imagens/geladeira4.jpg"" width=" 120px" id="lupa2" onmouseover="grande2()"
                    onmouseout="normal2()" /><br>
                <font face="Arial" size="2">Geladeira Frost Free Bosh Side Inverse 420 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 4.269,00</strike></font> <br>
                <button onclick="novoG2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="g2"></font>
            </td>
        </tr>
        <tr>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/geladeira3.jpg" width="120px" id="lupa3" onmouseover="grande3()"
                    onmouseout="normal3()" /><br>
                <font face="Arial" size="2">Geladeira Frost Free Brastemp Side Inverse 440 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 4.560,00</strike></font> <br>
                <button onclick="novoG3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="g3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 3.999,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/novageladeira02.jpg" width="120px" id="lupa4" onmouseover="grande4()"
                    onmouseout="normal4()" /20px"><br>
                <font face="Arial" size="2">Geladeira Frost Free Eletrolux Side Inverse 520 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 4.899,00</strike></font> <br>
                <button onclick="novoG4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="g4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 4.099,00</font> <br>-->
            </td>

        </tr>

    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_lavadoras.php">Lavadouras</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_tv.php">Televisores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_fogoes.php">Fogões</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_microondas.php">Micro Ondas</a>
            </li>

        </ul>
    </div>

</body>

</html>