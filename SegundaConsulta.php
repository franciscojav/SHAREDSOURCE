<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="author" lang="en" content="All: Your name [www.url.com]; e-mail: info@url.com" />
    <meta name="copyright" lang="en" content="Webdesign: Nuvio [www.nuvio.cz]; e-mail: ahoj@nuvio.cz" />

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/estilot.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />

    <title>Segunda Consulta</title>
</head>

<body>

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
        <div id="nav">
            <a href="index.php" id="nav-active">Cerrar sesi&oacuten</a> <span>|</span>
  
        </div> <!-- /nav -->

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
            <li id="tray-active"><a href="main.php">Bienvenidos</a></li> <!-- Active page -->
            <li><a href="newcode.php">Nuevo C&oacutedigo</a></li>
            <li><a href="firstConsulta.php">C&oacutedigos Guardados</a></li>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="historial.php" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="ide" value="Buscar: " /></div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">
 <form>
        <div id="col-text">
            

            <table border="5">
            <tr>
                <th>Hora</th>
                
                <th>Nombre</th>
            </tr>
            <tr>
<?php
include("conexion.php");
$fecha=$_REQUEST['fecha'];
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);

$query="SELECT hora, nombre from prueba where fecha='$fecha' order by hora desc;";
$listado = mysql_query($query) or die(mysql_error());   
while($registro = mysql_fetch_assoc($listado))
{
   echo "</tr><tr><td>".$registro['hora']."<td></td><td><p>".$registro['nombre']."</p></td>";
}

?>

</tr>
            
        </table>
        </div> <!-- /col-text -->
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    </form>
    

   <!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right"><a href="index.php">P&aacutegina Web</a> presentada por <a href="index.php">5to Semestre de Ingenier&iacutea en Computaci&oacuten</a></p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->
</div> <!-- /main -->
<script src="JS/jquery-1.10.2.js"></script>
<script src="JS/jquery-1.5.min.js"></script>
<script src="JS/logica2.js"></script>
</body>
</html>
