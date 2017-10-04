<!DOCTYPE html>
<html>
    <head>
        <title>Add Custom GMap Markers - Map Markers | Rafael Clares</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
		
        <div class="container_12">
            <div class="grid_12">
                <p class="alert alert-info"><i class="icon-search"></i> Adicionar Marcadores Personalizados</p>
            </div>
            <div class="grid_12">
                <div class="map" id="map" style="height: 300px; width: 100%;"></div>
            </div>			
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/markers.js" type="text/javascript"></script>		
        <script>
            $(function(){
               //Definir o centro do mapa [endereço + elm div]
               initMap('03884100','map');
               //Adicionar marcadores  [endereço + descricao html)
               addMarker('03884100','Local X');
               addMarker('Al. Franca, 278, São Paulo, SP','Local Y');
               addMarker('Av. Paulista, 500, São Paulo - SP','Local Z');
            })
        </script>
		
    </body>
</html>