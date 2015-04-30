<!DOCTYPE html>
<html>
    <head>
        <title>Em Dúvida</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="css/font-awesome.css">

    </head>
    <body>
        
        
        
        <?php 
        //Incluindo as páginas de cabeçalho no site:
        
        include_once "./header.php";
        
        
        ?>

        
        <section id="corpo">
            
        <?php
            //incluindo a area de propaganda:
            include_once './propaganda.php';
            
        ?>
        
        <?php
        //Incluindo a página de conteudo inicial do site:
        
        include_once './conteudo.php';
        
        ?>
        
        
         
        </section>
         
            
            
            <?php
        //Incluindo a página de rodapé  do site:
        
        include_once './footer.php';
        
        ?>
        
        
        
    </body>
</html>
