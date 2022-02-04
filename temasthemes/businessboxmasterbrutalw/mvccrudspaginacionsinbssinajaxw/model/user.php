<?php

	//require_once ("model/conexion.php");//Contiene funcion que conecta a la base de datos
	
class user
{
	public $con;
    /*
	1	id			Primaria	int(11)			No	Ninguna		AUTO_INCREMENT	Cambiar Cambiar	Eliminar Eliminar	
Más Más
	2	username	varchar(50)	latin1_swedish_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	3	password	varchar(50)	utf8mb4_spanish_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	4	name	varchar(50)	utf8mb4_spanish_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	5	lastname	varchar(50)	latin1_swedish_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	6	lastname2	varchar(50)	utf8mb4_spanish_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	7	email	varchar(255)	latin1_swedish_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	8	address	varchar(255)	latin1_swedish_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	9	phone	varchar(255)	latin1_swedish_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	10	admin	tinyint(1)			No	0			Cambiar Cambiar	Eliminar Eliminar	
Más Más

*/

		

	public $id;
    public $username;
    public $password;
    public $name;  
    public $lastname;
	public $lastname2;
	public $email;
	public $phone;
	public $admin;



	public function __CONSTRUCT()
	{

		define('DB_HOST','localhost');
		define('DB_USER','root');
		define('DB_PASS','');
		//define('DB_NAME','tblprod');
		define('DB_NAME','tareaproyecto');
		# conectare la base de datos
		$this->con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		//cuando la conexion es false es lo que quiere decir
		if(!$this->con){
			die("imposible conectarse: ".mysqli_error($this->con));
		}
		if (@mysqli_connect_errno()) {
			die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
		}
		

    }

	public function eliminarmysqli($sql){
		
		$query = mysqli_query($this->con,$sql);
		return $query;
	}

	
public function actualizarmysqli($sql)
{
	// UPDATE data into database
    
    $query = mysqli_query($this->con,$sql);
return $query;

}





	public function mostrartablamysqli($sql)
	{



		$query = mysqli_query($this->con,$sql);
		$finales=0;
	while($row = mysqli_fetch_array($query)){
							
		$product_id=$row['id'];
		$prod_code=$row['prod_code'];
		$prod_name=$row['prod_name'];
		$prod_ctry=$row['prod_ctry'];
		$prod_qty=$row['prod_qty'];
		$price=$row['price'];						
		$finales++;
		$text_class = '';//jag
		

	echo "<tr class='$text_class'>";
	echo "<td class='text-center'>$prod_code</td>";
		echo "<td >$prod_name</td>";

		echo "<td >$prod_ctry</td>";
		echo "<td class='text-center' >$prod_qty</td>";
		echo "<td class='text-right'>" . number_format($price,2) . "</td>";
		echo "<td>";
			echo "<a href='#editProductModal'  data-target='#editProductModal' class='edit' data-toggle='modal' data-code='$prod_code;' data-name='$prod_name' data-category='$prod_ctry' data-stock='$prod_qty' data-price='$price;' data-id='$product_id;'><i class='material-icons' data-toggle='tooltip' title='Edita' >&#xE254;</i></a>";
			echo "<a href='#deleteProductModal' class='delete' data-toggle='modal' data-id='$product_id;'><i class='material-icons' data-toggle='tooltip' title='Eliminar'>&#xE872;</i></a>";
		echo "</td>";
	echo "</tr>";
	}//final while

	
return $finales;






	}

	
}