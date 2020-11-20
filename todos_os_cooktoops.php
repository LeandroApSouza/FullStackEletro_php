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
                <img src="./imagens/cooktop1.jpg" width="120px" id="lupaCt1" onmouseover="grandeCt1()"
                    onmouseout="normalCt1()" /><br>
                <font face="Arial" size="2">Cooktoop Brastemp 5 bocas</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 889,00</strike></font> <br>
                <button onclick="novoCT1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="ct1"></font>
                <!--<font face="Arial" size="4" color="red">R$ 699,00</font> <br>-->
            </td>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/cooktop2.jpg"" width=" 120px" id="lupaCt2" onmouseover="grandeCt2()"
                    onmouseout="normalCt2()" /><br>
                <font face="Arial" size="2">Cooktoop Bosch 5 bocas</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.089,00</strike></font> <br>
                <button onclick="novoCT2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="ct2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 819,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/cooktop3.jpg" width="120px" id="lupaCt3" onmouseover="grandeCt3()"
                    onmouseout="normalCt3()" /><br>
                <font face="Arial" size="2">Cooktoop Consul 5 bocass</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 789,00</strike></font> <br>
                <button onclick="novoCT3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="ct3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 699,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/cooktop4.jpg" width="120px" id="lupaCt4" onmouseover="grandeCt4()"
                    onmouseout="normalCt4()" /><br>
                <font face="Arial" size="2">Cooktoop Philco 5 bocas</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 689,00</strike></font> <br>
                <button onclick="novoCT4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="ct4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 5.99,00</font> <br>-->
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


    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
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