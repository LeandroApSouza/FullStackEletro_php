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
                <img src="./imagens/liquitificador1.jpg" width="120px" id="lupaLf1" onmouseover="grandeLf1()"
                    onmouseout="normalLf1()" /><br>
                <font face="Arial" size="2">Philco 2 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 199,00</strike></font> <br>
                <button onclick="novoLf1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lf1"></font>
                <!--<font face="Arial" size="4" color="red">R$ 119,00</font> <br>-->
            </td>
            <td width=" 10%" align="center" valign="bottom">
                <img src="./imagens/liquitificador2.jpg"" width=" 120px" id="lupaLf2" onmouseover="grandeLf2()"
                    onmouseout="normalLf2()" /><br>
                <font face="Arial" size="2">Mundial Turbo com filtro 2,7 litros</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 154,00</strike></font> <br>
                <button onclick="novoLf2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lf2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 124,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/liquitificador3.jpg" width="120px" id="lupaLf3" onmouseover="grandeLf3()"
                    onmouseout="normalLf3()" /><br>
                <font face="Arial" size="2">Malloy 2 litro</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 123,41</strike></font> <br>
                <button onclick="novoLf3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lf3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 100,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/liquitificador4.jpg" width="120px" id="lupaLf4" onmouseover="grandeLf4()"
                    onmouseout="normalLf4()" /><br>
                <font face="Arial" size="2">Arno Power Maxs com filtro 1,7 litro</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 220,00</strike></font> <br>
                <button onclick="novoLf4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lf4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 189,00</font> <br>-->
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


    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_lavadoras.php">Lavadouras</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_tv.php">Televisores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_fogoes.php">Fogões</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_microondas.php">Micro Ondas</a>
            </li>

        </ul>
    </div>




</body>

</html>