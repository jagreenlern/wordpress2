<?php
class products
{
	private $pdo;
    
	
/*Nombre	Tipo	Cotejamiento	Atributos	Nulo	Predeterminado	Comentarios	Extra	Acción
1	SupplierIDs	longtext	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	2	IDPrimaria	int(11)			No	Ninguna		AUTO_INCREMENT	Cambiar Cambiar	Eliminar Eliminar	
Más Más
	3	ProductCode	Índice	varchar(25)	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	4	ProductName	varchar(50)	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	5	Description	longtext	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	6	StandardCost	decimal(19,4)			Sí	0.0000			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	7	ListPrice	decimal(19,4)			No	0.0000			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	8	ReorderLevel	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	9	TargetLevel	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	10	QuantityPerUnit	varchar(50)	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	11	Discontinued	tinyint(1)			No	0			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	12	MinimumReorderQuantity	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	13	Category	varchar(50)	utf8_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
Más Más
	14	Attachments	longblob			Sí	NULL*/

	public $SupplierIDs;
    public $ID;
    public $ProductCode;
    public $ProductName;
    public $Description;  
    public $StandardCost;
    public $ListPrice;
	public $ReorderLevel;
	public $TargetLevel;
	public $QuantityPerUnit;
	public $Discontinued;
	public $MinimumReorderQuantity;
	public $Category;
	public $Attachments;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM products");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($ID)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM products WHERE ID = ?");
			          

			$stm->execute(array($ID));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($ID)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM products WHERE ID = ?");			          

			$stm->execute(array($ID));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		/*public $SupplierIDs;
		public $id;
		public $ProductCode;
		public $ProductName;
		public $Description;  
		public $StandardCost;
		public $ListPrice;
		public $ReorderLevel;
		public $TargetLevel;
		public $QuantityPerUnit;
		public $Discontinued;
		public $MinimumReorderQuantity;
		public $Category;
		public $Attachments;*/
		try 
		{
			$sql = "UPDATE products SET 
						SupplierIDs      		= ?,
						ProductCode          = ?,
						ProductName          = ?, 
						Description        = ?,
                        StandardCost        = ?,
                        ListPrice        = ?,
						ReorderLevel        = ?,
						TargetLevel        = ?,
						QuantityPerUnit        = ?,
						Discontinued        = ?,
						MinimumReorderQuantity        = ?,
						Category        = ?,
						Attachments        = ?
						
				    WHERE ID  = ?";
					/*
					UPDATE products SET 
					SupplierIDs      		= 1,
					ProductCode          = 1,
					ProductName          = 1, 
					Description        = "des2",
					StandardCost        = 1,
					ListPrice        = 1,
					ReorderLevel        = 1,
					TargetLevel        = 1,
					QuantityPerUnit        = 1,
					Discontinued        = 1,
					MinimumReorderQuantity        = 1,
					Category        = 1,
					Attachments        = 1
					
				WHERE ID  = 100*/

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->SupplierIDs, 
						
                        $data->ProductCode,
						$data->ProductName,                        
                        $data->Description,
                        $data->StandardCost,
                        $data->ListPrice, 
						$data->ReorderLevel,
						$data->TargetLevel, 
						$data->QuantityPerUnit, 
						$data->Discontinued, 
						$data->MinimumReorderQuantity, 
						$data->Category, 
						$data->Attachments,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(products $data)
	{
		/*public $SupplierIDs;
		public $ID;
		public $ProductCode;
		public $ProductName;
		public $Description;  
		public $StandardCost;
		public $ListPrice;
		public $ReorderLevel;
		public $TargetLevel;
		public $QuantityPerUnit;
		public $Discontinued;
		public $MinimumReorderQuantity;
		public $Category;
		public $Attachments;*/
		try 
		{
		//$sql = "INSERT INTO products (SupplierIDs,ProductCode,ProductName,Description,StandardCost,ListPrice,ReorderLevel,TargetLevel,TargetLevel,QuantityPerUnit,Discontinued,MinimumReorderQuantit,Category,Attachments)
		//        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$sql = "INSERT INTO products (SupplierIDs,ProductCode,ProductName,Description,StandardCost,ListPrice,ReorderLevel,TargetLevel,QuantityPerUnit,Discontinued,MinimumReorderQuantity,Category,Attachments)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $data->SupplierIDs, 
                    $data->ProductCode,
                    $data->ProductName, 
					$data->Description,
					$data->StandardCost,
					$data->ListPrice,
					$data->ReorderLevel,
					$data->TargetLevel,
					$data->QuantityPerUnit,
					$data->Discontinued,
					$data->MinimumReorderQuantity,
					$data->Category,
                    $data->Attachments
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}