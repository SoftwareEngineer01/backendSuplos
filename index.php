<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario</title>
</head>

<body>

  <?php                     
    require_once "controller/controller.php";
    $dt = new Controller();
  ?>
 
  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="controller/ajax.php" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" id="selectCiudad">          
             <option value='' selected>Elige una ciudad</option>             
               <?php 
                $value = 'Ciudad';
                $fixed = $dt->getDataSelect($value);
                foreach ($fixed as $data) : ?>
                  <option value="<?= $data[$value]; ?>"><?= $data[$value]; ?></option>
                <?php endforeach; ?>           
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo">
            <option value='' selected>Elige un Tipo</option>             
               <?php 
                $value = 'Tipo';
                $fixed = $dt->getDataSelect($value);
                foreach ($fixed as $data) : ?>
                  <option value="<?= $data[$value]; ?>"><?= $data[$value]; ?></option>
                <?php endforeach; ?>      
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a href="#tabs-2">Mis bienes</a></li>
      </ul>
      <!-- <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Resultados de la búsqueda:</h5>
            <div class="divider"></div>
          </div>
        </div>
      </div> -->

      <div class="data">          
        <?php  
         
          $data = $dt->getData();
          
          foreach ($data as $info) {
            echo "<br>";           
            echo "<div>";
            echo "<img class='image' src='img/home.jpg'>";           
            echo "</div>";

            echo "<div>";
            echo "Dirección: ".$info['Direccion'];      
            echo "</div>";  
            
            echo "<div>";
            echo "Ciudad: ".$info['Ciudad'];      
            echo "</div>";  

            echo "<div>";
            echo "Teléfono: ".$info['Telefono'];      
            echo "</div>";  

            echo "<div>";
            echo "Código Postal: ".$info['Codigo_Postal'];      
            echo "</div>";  

            echo "<div>";
            echo "Tipo: ".$info['Tipo'];      
            echo "</div>";  

            echo "<div>";
            echo "Precio: ".$info['Precio'];      
            echo "</div>";  
          }
        ?>    
      </div>


      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <div class="divider"></div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
