<?php
$this->breadcrumbs=array(
	'Item On Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ItemOnOrder', 'url'=>array('index')),
	array('label'=>'Create ItemOnOrder', 'url'=>array('create')),
	array('label'=>'Update ItemOnOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemOnOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemOnOrder', 'url'=>array('admin')),
);
?>

<h1>View ItemOnOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'purchase_order_id',
		'items_id',
		'suppliers_id',
		'item_status',
		'out_of_stock_factory_date',
		'factory_due_date',
		'quantity_ordered',
		'unit_price',
		'total_price',
		'created',
		'modified',
	),
)); ?>
