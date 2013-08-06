<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        	include 'view/TemplatePagina.php';
                $templatePagina = new TemplatePagina();
                $templatePagina->setNomePagina("Cadastro");
                $templatePagina->setTituloPagina("Cadastro");
                include 'view/templateExterno.xhtml';

                include 'view/cadastro/cadastro.php';
                
                
        ?>
        
        <div id="idFooter">
            <div class="content">
                Desenvolvido por midiacom<br/>
            </div>
        </div>
    </body>
</html>