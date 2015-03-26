<!DOCTYPE html>
<html>
    <head>
        <title>Em Dúvida</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="css/font-awesome.css">
       <script>
            function mostraSub(valor){
                verifica=document.getElementById(valor).style.display;
                if(verifica !=="block"){
                    document.getElementById(valor).style.display="block";
                }
                else{
                    document.getElementById(valor).style.display="none";
                }                
            }
        </script>
    </head>
    <body>
        <?php 
        //Incluindo as páginas de cabeçalho no site:
        
        include_once "./header.php";
        
        
        
        ?>
        
        <section id="conteudo">
            <h1> Mais Votados</h1>
            
            <section class="campo1">
                <section id="segura">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                <section class="segura2">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                <section class="segura2">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                <section class="segura2">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
            </section>
            
            <h1> Mais Visualizados</h1>
            
            
            <section class="campo1">
                
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="segura1">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                
                
                <section id="segura4">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                <section class="segura3">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                <section class="segura3">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                <section class="segura3">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
            </section>
            
            
            <h1> Recentes </h1>
            
            
            <section id="campo2">
                
                <section class="seguraR">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                
                <section class="seguraR">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="seguraR">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                    <section class="seguraR">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="seguraR">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                
             </section>   
                
                
                <section id="campo3">
                    <h1> Negativos</h1>
                
                <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                </section>
                
                <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                    <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                    </section>
                <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                    <section class="seguraP">
                    <a href="pag_resenha.html" class="es">Nome da Resenha</a>
                    
                </section>
                
                </section>
         
        </section>
            <footer id="rodape">
                <img src="img/icon_gg.png" alt="icon_gg" id="logoEmp">
                <a href="#" ><img src="img/icon_fb.png" alt="icon_fb" class="icones"></a>
                <a href="#" ><img src="img/icon_tw.png" alt="icon_tw" class="icones1"></a>
                <a href="#" ><img src="img/icon_gg.png" alt="icon_gg" class="icones2"></a>
                <a href="#" class="pp"> Política de Privacidade</a>
                <a href="#" class="pp"> Termos de Uso</a>
                <p id="mark">All Rights Reserved - Todos os Direitos Reservados<br/><br/>Em Dúvida 2015</p>
            </footer>
    </body>
</html>
