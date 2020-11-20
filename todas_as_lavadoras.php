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
    <<?PHP
    include("submenu_produtos.html");
    
    ?>
    <!--inicio dos produtos-->
    </table>
    <table>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/lavaroupa1.jpg" width="120px" id="lupaLv1" onmouseover="grandeLv1()"
                    onmouseout="normalLv1()" /><br>
                <font face="Arial" size="2">Lavadouras Brastemp 12 kg</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.689,00</strike></font> <br>
                <button onclick="novoLv1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lv1"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.499,00</font> <br>-->
            </td>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/lavaroupa2.jpg"" width=" 120px" id="lupaLv2" onmouseover="grandeLv2()"
                    onmouseout="normalLv2()" /><br>
                <font face="Arial" size="2">Lavadouras Eletrolux 10 kgs</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.439,00</strike></font> <br>
                <button onclick="novoLv2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lv2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.199,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/lavaroupa3.jpg" width="120px" id="lupaLv3" onmouseover="grandeLv3()"
                    onmouseout="normalLv3()" /><br>
                <font face="Arial" size="2">Lavadouras Consul 10 kg</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.389,00</strike></font> <br>
                <button onclick="novoLv3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lv3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.119,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/lavaroupa4.jpg" width="120px" id="lupaLv4" onmouseover="grandeLv4()"
                    onmouseout="normalLv4()" /><br>
                <font face="Arial" size="2">Lavadouras Colomaq 12 kg</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.331,00</strike></font> <br>
                <button onclick="novoLv4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Lv4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.099,00</font> <br>-->
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


    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_tv.php">Televisores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_fogoes.php">Fogões</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_microondas.php">Micro Ondas</a>
            </li>

        </ul>
    </div>



</body>

</html>