<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./css/reset.css">
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
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/micro1.jpg" width="120px" id="lupaMo1" onmouseover="grandeMo1()"
                    onmouseout="normalMo1()" /><br>
                <font face="Arial" size="2">Eletrolux 20 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 599,00</strike></font> <br>
                <button onclick="novoMo1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Mo1"></font>
                <!-- <font face="Arial" size="4" color="red">R$ 499,00</font> <br>-->
            </td>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/micro2.jpg"" width=" 120px" id="lupaMo2" onmouseover="grandeMo2()"
                    onmouseout="normalMo2()" /><br>
                <font face="Arial" size="2">Lg Solo 30 litro</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 6.229,00</strike></font> <br>
                <button onclick="novoMo2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Mo2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 599,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/micro3.jpg" width="120px" id="lupaMo3" onmouseover="grandeMo3()"
                    onmouseout="normalMo3()" /><br>
                <font face="Arial" size="2">Consul 32 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 699,00</strike></font> <br>
                <button onclick="novoMo3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Mo3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 589,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/micro4.jpg" width="120px" id="lupaMo4" onmouseover="grandeMo4()"
                    onmouseout="normalMo4()" /><br>
                <font face="Arial" size="2">Philco 21 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 449,00</strike></font> <br>
                <button onclick="novoMo4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Mo4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 399,00</font> <br>-->
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
    <br>
    <br>
    <br>
    <br>



    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_lavadoras.php">Lavadouras</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_tv.php">Televisores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_fogoes.php">Fogões</a></li>

        </ul>
    </div>




</body>

</html>