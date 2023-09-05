<?php

include_once 'produtos.php';
$p = new Produto();
$pro_bd=$p->listar();
?>
<b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp;Estoque</b>
<?php
            foreach($pro_bd as $pro_mostrar)
            {
                ?>
                <br><br>
                <b><?php echo $pro_mostrar[0];?></b>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[1];?> &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[2];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                <?php

        
        }
         echo "<br><br><button><a href= 'menu_produto.html'> Voltar </a></button>";
        ?>
