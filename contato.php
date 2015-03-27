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
        
        <br/><Br/>
            <h1 class="tituloPadrao">ENTRE EM CONTATO CONOSCO</h1>
            <br><br>
            
            <form method="post" action="" id="FormContato">
                <label for="nome">
                    <span>Nome: </span><input type="text" class="formContato" name="nome">
                </label>
                
                 <label for="email">
                    <span>Email: </span><input type="text" class="formContato" name="nome">
                </label>
                
                <label for="mensagem">
                    <span>Mensagem: </span><br><textarea class="formContato" id="contatoMsg"></textarea>
                </label>
                
                <input type="submit" value="Enviar" class="formContato"/>
            </form>
         
        </section>
         <?php
        //Incluindo a página de rodapé  do site:
        
        include_once './footer.php';
        
        ?>
        

    </body>
</html>
