<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<Script>
$(function(){
    

        $('#btnCadastro').click(function(){
           
    $(location).attr('href', 'frmCadastro.php');
        });

});
</script>
<header id="cabecalho">

    <img class="imgLogo" src="" alt="logo"/>
    <form method="post" action="" class="formPesquisa">
        
        <input type="search" class="formPadrao" name="buscar"/>
        <input type="image" src="img/search19.png" class="formPadrao"/>
    </form>
    
    <ul class="ulPadrao ulCadLogin">
        <li class="liPadrao"><button class="formPadrao btnCadLogin" id="btnCadastro"><i class="fa fa-pencil-square-o "></i>Cadastre-se</button></li>
        <li class="liPadrao"><button class="formPadrao btnCadLogin" ><i class="fa fa fa-sign-in "></i>Entrar</button></li>
    </ul>
    
    <nav class="menu"> 
        
        <ul class="ulPadrao ulMenu">
            <li class="liPadrao liMenu"><a href="index.php" class="linkPadrao">Inicio</a></li>
            <li class="liPadrao liMenu"><a href="" class="linkPadrao">Eletrodomésticos</a></li>
            <li class="liPadrao liMenu"><a href="" class="linkPadrao">Eletrônicos</a></li>
            <li class="liPadrao liMenu"><a href="" class="linkPadrao">Cultura</a></li>
            <li class="liPadrao liMenu"><a href="" class="linkPadrao">Outros <i class="fa fa-caret-down"></i></a></li>
            
            <li class="liPadrao liMenu fright"><a href="sobre.php" class="linkPadrao ">Sobre nós</a></li>
            <li class="liPadrao liMenu fright"><a href="contato.php" class="linkPadrao fright">Contato</a></li>
        </ul>
    </nav>


</header>
