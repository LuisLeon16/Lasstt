<?php


    $servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "lasstt";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

  $salida="";
    $query ="SELECT * FROM pago WHERE id_suario NOT LIKE'' ORDER By id LIMIT 500";

   if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM pago WHERE id LIKE '%$q%' OR id_suario LIKE '%$q%' OR banco_e LIKE '%$q%' OR tipo_tj LIKE '%$q%' OR fecha_compra LIKE '%$q%' OR valor LIKE '%$q%' OR nombre_tj LIKE '%$q%' OR num_tj LIKE '%$q%' OR mes_tj LIKE '%$q%' OR year_tj LIKE '%$q%' OR Estado LIKE '%$q%'";
    }
    $resultado = $conn->query($query);


 if ($resultado->num_rows>0) {
    	$salida.="<table border='1' width='100%' height='450px'>
    			
                <thead>
    			 <tr>
                <table class='table table-striped' border='1' width='100%' height='65px'>
                 <tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='15'><center>LISTADO DE FACTURAS</center></td></tr>

					<th bgcolor='#FFFFFF'><center>Codigo de compra</center></th>
					<th bgcolor='#FFFFFF'><center>Codigo Cliente</center></th>
					<th bgcolor='#FFFFFF'><center>Banco</center></th>
					<th bgcolor='#FFFFFF'><center>Tipo Tarjeta</center></th>
					<th bgcolor='#FFFFFF'><center>Fecha</center></th>
                    <th bgcolor='#FFFFFF'><center>Precio</center></th>
                    <th bgcolor='#FFFFFF'><center>Nombre cliente</center></th>
                    <th bgcolor='#FFFFFF'><center>Numero de Tarjeta</center></th>
                    <th bgcolor='#FFFFFF'><center>Mes</center></th>
                    <th bgcolor='#FFFFFF'><center>Año</center></th>
                    <th bgcolor='#FFFFFF'><center>Estado</center></th>
					
                
				
				</tr>

    			</thead>
                
               
    			
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td><center>".$fila['id']."</center></td>
    					<td><center>".$fila['id_suario']."</center></td>
    					<td>".$fila['banco_e']."</td>
    					<td>".$fila['tipo_tj']."</td>
    					<td>".$fila['fecha_compra']."</td>
                        <td>".$fila['valor']."</td>
                        <td>".$fila['nombre_tj']."</td>
                        <td>".$fila['num_tj']."</td>
                        <td>".$fila['mes_tj']."</td>
                        <td>".$fila['year_tj']."</td>
                         <td>".$fila['Estado']."</td>
                        
    				</tr>";
            
    
      

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :v";
    }


    echo $salida;

    $conn->close();



?>