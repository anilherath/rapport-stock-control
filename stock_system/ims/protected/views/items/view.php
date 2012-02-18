<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Create Items', 'url'=>array('create')),
	//array('label'=>'Update This Items', 'url'=>array('update', 'id'=>$model->item_id)),
	//array('label'=>'Delete Items', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->item_id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Part Number#&nbsp;&nbsp;  <?php echo $model->part_number; ?></h1>
<div style="text-align: right;">
<?php echo CHtml::link('Edit',array('update', 'id'=>$model->item_id)); ?>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'item_id',
		//'company_id',
		'part_number',
		'name',
		'description',
		'barcode',
		'location_room',
		'location_row',
		'location_column',
		'location_shelf',
		//'category_id',
		'current_quantity',
		'available_quantity',
		'recommended_lowest_quantity',
		'recommended_highest_quantity',
		'remarks',
//		'active',
			
		array(  'name'=>'active',
      			'value'=>(($model->active==0)?"No":"Yes"),
			),
		//'image_url',
		'sale_price',
		//'factory_due_date',
			
// 		array(  'name'=>'factory_due_date',
// 					//'value'=>(date('d-M-Y',$model->factory_due_date)),
// 			),		'value'=>(($model->factory_due_date=='')?"":"Yes"),
			
		//'suppliers_id',
		'suppliers.name',
		'fits_in_model',
		//'created',
		array(  'name'=>'created',
					'value'=>(date('d-M-Y H:i',$model->created)),
			),
		array(  'name'=>'modified',
					'value'=>(date('d-M-Y H:i',$model->modified)),
			),
	
	//	'deleted',
	),
)); ?>
