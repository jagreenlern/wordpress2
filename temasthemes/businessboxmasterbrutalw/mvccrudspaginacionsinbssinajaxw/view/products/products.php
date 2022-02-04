<h1 class="page-header">CRUD con el patrón MVC en PHP POO y PDO </h1>
<h2 class="page-header">Products</h2>
<p>/?c=products&a=Crud<p>

    <a class="btn btn-primary pull-right" href="?c=products&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">DNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style=" background-color: #5DACCD; color:#fff">Apellido</th>
            <th style=" background-color: #5DACCD; color:#fff">Correo</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Telefono</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    
/*    public $SupplierIDs;
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

    
    foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->SupplierIDs; ?></td>
            <td><?php echo $r->ProductCode; ?></td>
            <td><?php echo $r->ProductName; ?></td>
            <td><?php echo $r->Description; ?></td>
            <td><?php echo $r->StandardCost; ?></td>
            <td><?php echo $r->ListPrice; ?></td>
            <td><?php echo $r->ReorderLevel; ?></td>
            <td><?php echo $r->TargetLevel; ?></td>
            <td><?php echo $r->QuantityPerUnit; ?></td>
            <td><?php echo $r->Discontinued; ?></td>
            <td><?php echo $r->MinimumReorderQuantity; ?></td>
            <td><?php echo $r->Category; ?></td>
            <td><?php echo $r->Attachments; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=products&a=Crud&id=<?php echo $r->ID; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=products&a=Eliminar&id=<?php echo $r->ID ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
