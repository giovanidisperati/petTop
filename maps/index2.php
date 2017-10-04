<!DOCTYPE html>
<?php include("conexaoBanco.php");?>
<html>
    <head>
        <title>Add Custom GMap Markers - Map Markers | Rafael Clares</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
    <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/markers.js" type="text/javascript"></script>    
        <script>
        function maps(cep, nome) {
            $(function(){
               //Definir o centro do mapa [endereço + elm div]
               initMap('-23.5117461, -46.4829643','map');
               //Adicionar marcadores  [endereço + descricao html)
               addMarker(cep,nome);
              
            });
          }
        </script>
		<?php
  // se o número de resultados for maior que zero, mostra os dados
  if($total > 0) {
    // inicia o loop que vai mostrar todos os dados
    do {
    $nome = $linha['nome'];
    $cep = '0'.$linha['cep'];
    echo "<script>maps('$cep', '$nome')</script>";
    // finaliza o loop que vai mostrar os dados
    }while($linha = mysql_fetch_assoc($dados));
  // fim do if 
  }
?>
        <div class="container_12">
            <div class="grid_12">
                <p class="alert alert-info"><i class="icon-search"></i> Adicionar Marcadores Personalizados</p>
            </div>
            <div class="grid_12">
                <div class="map" id="map" style="height: 300px; width: 100%;"></div>
            </div>			
        
		
    </body>
</html>