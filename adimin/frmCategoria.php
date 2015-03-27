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
        <form method="post" action="" id="FormProduto">
            <input type="text" class="" name="pesquisa" placeholder="Pesquisar">
            <input type="submit" class="" name="pesquisar" value="Pesquisar">
        </form>
        <br><br>
        <label for="TiCategotia">
                    <span>Título Categoria: </span><input type="text" class="" name="TiCategoria">
        </label> <br><br>
        <label for="CorCategotia">
                    <span>Cor da Categoria: </span><input type="text" class="" name="CorCategoria">
        </label>
         <br><br>
              <input  class="" type="submit" value="Enviar" name="enviar"/>
        <br><br>
        <table id="tabela">
    <caption>Categorias</caption>

    <tr><td ><span>Nome Produto:</span><input type="text" class="" name="NomeProduto"></td></tr>
    <tr><td ><span>Código do Produto:</span><input type="text" class="" name="CódigoProduto"></td></tr>
    <tr><td>
    <input  class="" type="submit" value="Excluir" name="Excluir"/>
    <input  class="" type="submit" value="Alterar" name="alterar"/>
    </td></tr>
        </table>
    </body>
</html>    


