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
    <br>
    <br>

    <table>
        <tr>
            <td width="25%" align="center" valign="bottom">
                <img src="./imagens/fogão1.jpg" width="120px" id="lupaFg1" onmouseover="grandeFg1()"
                    onmouseout="normalFg1()" /><br>
                <font face="Arial" size="2">Consul 5 bocas acendimento altomaticos</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.589,00</strike></font> <br>
                <button onclick="novoFo1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Fo1"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.399,00</font> <br>-->
            </td>
            <td width="25%" align="center" valign="bottom">
                <img src="./imagens/fogão2.jpg"" width=" 120px" id="lupaFg2" onmouseover="grandeFg2()"
                    onmouseout="normalFg2()" /><br>
                <font face="Arial" size="2">Atlas Agile 5 bocas acendimento altomaticos</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.114,00</strike></font> <br>
                <button onclick="novoFo2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Fo2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.009,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="25%" align="center" valign="bottom">
                <img src="./imagens/fogão3.jpg" width="120px" id="lupaFg3" onmouseover="grandeFg3()"
                    onmouseout="normalFg3()" /><br>
                <font face="Arial" size="2">Fenix 5 bocas acendimento altomaticos mesa de vidro</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.589,00</strike></font> <br>
                <button onclick="novoFo3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Fo3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.299,00</font> <br>-->
            </td>
            <td width="25%" align="center" valign="bottom">
                <img src="./imagens/fogão4.jpg" width="120px" id="lupaFg4" onmouseover="grandeFg4()"
                    onmouseout="normalFg4()" /><br>
                <font face="Arial" size="2">Itatiaia 5 bocas acendimento altomaticos</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.089,00</strike></font> <br>
                <button onclick="novoFo4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Fo4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 979,00</font> <br>-->
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
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_lavadoras.php">Lavadouras</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_tv.php">Televisores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_microondas.php">Micro Ondas</a>
            </li>

        </ul>
    </div>




</body>

</html>