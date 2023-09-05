<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <!--Formatação do formúlario-->
    <form name = "livro" method = "POST" action = "">
        <fieldset id="a">
            <legend><b> Dados do Produto: </b></legend>
                <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="nome">
                <p> Estoque: <input name="txtestoque" type="text" size="40" maxlength="40" placeholder="Estoque">
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
                <br>
                <input  name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        <!--códgio php-->
            <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once 'produtos.php';
                    $pro = new Produto; 
                    $pro->setNome($txtnome);
                    $pro->setEstoque($txtestoque);

                    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
                }
            
            ?>
            <br>
            <center>
                <button><a href = "menu_produto.html">Voltar </a></button>
            </center>
            </form>
        </body>
</html>
