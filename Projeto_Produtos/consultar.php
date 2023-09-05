<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produto</title>
</head>
<body>
    <form name="cliente" method = "POST" action = "">
    <fieldset id="a"> 
        <legend><b> Informe o nome do produto desejado: </b></legend>
        <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto">
        <br><br>
            <input name="btenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar" >
    <fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Resultado: </b></legend>
    <?php
    
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btenviar))
        {
            include_once 'produtos.php';
            $p = new Produto();
            $p->setNome($txtnome. '%'); 
            $pro_bd=$p->consultar();
            foreach($pro_bd as $pro_mostrar)
            {
                ?> <br>
                <b> <?php echo "ID: " .$pro_mostrar[0];?> </b>
                <b> <?php echo "Nome: " . $pro_mostrar[1];?> </b>
                <b> <?php echo "Estoque: " .$pro_mostrar[2]?>    
            <?php
            }
        }

        ?>
   <button><a href = "menu_produto.html"> Voltar</a></button>
</body>

</html>