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
            <h1 class="tituloPadrao">Cadastre-se em nosso site</h1>
            <br><br>
            
            <form method="post" action="" id="FormCadastro">
                <label for="nome">
                    <span>Nome: </span><input type="text" class="formContato" name="nome">
                </label>
                <label for="sobrenome">
                    <span>Sobrenome: </span> <input  class="formContato" type="text" name=""/>
                </label>
                
                <label for="data">
                    <span>Data de nascimento: </span> <input  class="formContato" type="date" name=""/>
                </label>
                 <label for="email">
                    <span>Email: </span><input type="text" class="formContato" name="">
                </label>
                <label for="uf">
                    <span>Senha: </span><input type="password" class="formContato" name="uf">
                </label>
                <label for="confSenha">
                    <span>Confirme sua senha: </span><input type="password" class="formContato" name="uf">
                </label>
                <label for="cpf">
                    <span>Cpf: </span><input type="text" class="formContato" name="cpf">
                </label>
                <label for="uf">
                    <span>uf: </span><input type="text" class="formContato" name="uf">
                </label>
                
               
                 
         </form>        
                <input type="submit" value="Enviar" class="formContato"/>
            </form>
         
        </section>
         <?php
        //Incluindo a página de rodapé  do site:
        
        include_once './footer.php';
        
        ?>
        

    </body>
</html>
