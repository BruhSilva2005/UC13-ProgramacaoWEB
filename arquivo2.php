<html>
    <head>
        <title>Aula de PHP</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste at consequatur placeat debitis, reiciendis perspiciatis eligendi maiores ipsam ad sed neque modi. Libero, eaque voluptate. Rerum, esse laudantium? Laborum!</p>

        <?php

            echo"bruh";
        ?>

        <br>
        
        <?php 

        print"senac marilia ";
        ?>

        <br>
        <!-- comentario em HTML  -->
        
        <?php

        // Comentario em PHP

        /*  
            varias
            linhas
        */

        $nomeCompleto = "bruh silva";
        $idade = 17 ;
        $status = true;
        $salario = 1320.50; 

        echo $nomeCompleto ." ". $idade ;
        echo "<br>";
        echo "$nomeCompleto $idade anos";
        echo '<br>';
        echo '$nomeCompleto $idade anos';
        echo "<br>";
      
    

        $logoSenac="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";
        ?>

        <img src = "<?php echo $logoSenac ?> " alt = "Senac Marilia">

    </body>

</html>