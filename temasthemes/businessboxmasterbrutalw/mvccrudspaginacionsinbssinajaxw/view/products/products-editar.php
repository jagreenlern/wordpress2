<h1 class="page-header">
    <?php echo $products->ID != null ? $products->ProductName : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=products">products</a></li>
  <li class="active"><?php echo $products->ID != null ? $products->ProductName : 'Nuevo Registro'; ?></li>
</ol>

<!--public $SupplierIDs;
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
	public $Attachments;-->
<form id="frm-alumno" action="?c=products&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $products->ID; ?>" />
      <div class="form-group">
        <label>SupplierIDs</label>
        <input type="text" name="SupplierIDs" value="<?php echo $products->SupplierIDs; ?>" class="form-control" placeholder="Ingrese su dni" required>
    </div>
    
    <div class="form-group">
        <label>ProductCode</label>
        <input type="text" name="ProductCode" value="<?php echo $products->ProductCode; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>ProductName</label>
        <input type="text" name="ProductName" value="<?php echo $products->ProductName; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="Description" value="<?php echo $products->Description; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    
    <div class="form-group">
        <label>StandardCost</label>
        <input type="text" name="StandardCost" value="<?php echo $products->StandardCost; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required>
    </div>
    <div class="form-group">
        <label>ListPrice</label>
        <input type="text" name="ListPrice" value="<?php echo $products->ListPrice; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required>
    </div>
     <div class="form-group">
        <label>TargetLevel</label>
        <input type="text" name="TargetLevel" value="<?php echo $products->TargetLevel; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>QuantityPerUnit</label>
        <input type="text" name="QuantityPerUnit" value="<?php echo $products->QuantityPerUnit; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>ReorderLevel</label>
        <input type="text" name="ReorderLevel" value="<?php echo $products->ReorderLevel; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>Discontinued</label>
        <input type="text" name="Discontinued" value="<?php echo $products->Discontinued; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>MinimumReorderQuantity</label>
        <input type="text" name="MinimumReorderQuantity" value="<?php echo $products->MinimumReorderQuantity; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="Category" value="<?php echo $products->Category; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>Attachments</label>
        <input type="text" name="Attachments" value="<?php echo $products->Attachments; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>