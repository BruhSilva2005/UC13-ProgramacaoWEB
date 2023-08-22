<html>
    <head>
        <meta charset="utf -8">
        <title>Gerador de senha</title>

        <style>
            .boxSenha{
                border:1px solid  #cccccc ;
                display: inline-block;
                padding: 20px;
                width: 50px;
                text-align: center;
                background-color: #bbb5bd;
                font-size: 20px;
                color:black;
                font-weight: bold;
                margin: 5px;
            }
        </style>
</head>
    <body>
        <h1>Gerador de Senha</h1>


        <form  action="Gerador-senha.php"
        method="get">
            <label for= "qtdSenha">Quantidades de Senhas </label>
            <br>
            <input name="qtdSenha" type="number" id="qtdSenha">
            <br>
            <button type="submit">Gerar</button>
            <a href="gerador-senha.php">Cancelar Senhas</a>
        </form>

<hr>
   <?php if(isset($_GET['qtdSenha'])):  ?>

         <?php for($i =1; $i<= $_GET['qtdSenha']; $i++): ?>
        <div class="boxSenha">
                    <?=$i ?>
           </div>
           <?php endfor; ?>
        <?php  endif; ?>
     <hr>
            <p>
                copyright &copy; <?=date("d/m/Y H:i:s")?>.Todos os Direitos Reservados
            </p>
        


    </body>
</html>  