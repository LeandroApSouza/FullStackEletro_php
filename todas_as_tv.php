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
    </table>
    <table>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/tv1.jpg" width="120px" id="lupaTv1" onmouseover="grandeTv1()"
                    onmouseout="normalTv1()" /><br>
                <font face="Arial" size="2"> Smart TV Cristal Samsung 65"</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 4.389,00</strike></font> <br>
                <button onclick="novoTv1()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Tv1"></font>
                <!--<font face="Arial" size="4" color="red">R$ 3.999,00</font> <br>-->
            </td>
            <td width="10%" align="center" valign="bottom">
                <img src="./imagens/tv2.jpg"" width=" 120px" id="lupaTv2" onmouseover="grandeTv2()"
                    onmouseout="normalTv2()" /><br>
                <font face="Arial" size="2">Smart TV LG 58"</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 3.899,00</strike></font> <br>
                <button onclick="novoTv2()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Tv2"></font>
                <!--<font face="Arial" size="4" color="red">R$ 3.399,00</font> <br>-->
            </td>
        </tr>
        <tr>
            <td width="10%" align="center" valign="bottom">
                <img src=".//imagens/tv3.jpg" width="120px" id="lupaTv3" onmouseover="grandeTv3()"
                    onmouseout="normalTv3()" /><br>
                <font face="Arial" size="2">Smart TV k4 lec Phlips 50"</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 2.699,00</strike></font> <br>
                <button onclick="novoTv3()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Tv3"></font>
                <!--<font face="Arial" size="4" color="red">R$ 2.099,00</font> <br>-->
            </td>
            <td width="20%" align="center" valign="bottom">
                <img src="./imagens/tv4.jpg" width="120px" id="lupaTv4" onmouseover="grandeTv4()"
                    onmouseout="normalTv4()" /><br>
                <font face="Arial" size="2">Smart TV HD led Philco 32"</font>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.389,00</strike></font> <br>
                <button onclick="novoTv4()">
                    <font color="red"><b> Super Oferta!!</b></font>
                </button><br>
                <font face="Arial" size="4" color="red" id="Tv4"></font>
                <!--<font face="Arial" size="4" color="red">R$ 1.199,00</font> <br>-->
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
    <br>


    <div>
        <ul class="textoDaCaixasRodape after menuRodape formaTextoRodape">
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_geladeiras.php">Geladeira</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_cooktoops.php">Cooktoops</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todas_as_lavadoras.php">Lavadouras</a>
            </li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_liquitificadores.php">Liquitificadores</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_fogoes.php">Fogões</a></li>
            <li class="formatoDaCaixaRodape estiloDasCaixasRodape"> <a href="todos_os_microondas.php">Micro Ondas</a>
            </li>

        </ul>
    </div>




</body>

</html>