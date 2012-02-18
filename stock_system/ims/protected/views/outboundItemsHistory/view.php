<?php
$this->breadcrumbs=array(
	'Outbound Items Histories'=>array('index'),
	$model->history_id_item,
);

$this->menu=array(
	array('label'=>'List Outbound Items History', 'url'=>array('index')),
	//array('label'=>'Create OutboundItemsHistory', 'url'=>array('create')),
	//array('label'=>'Update OutboundItemsHistory', 'url'=>array('update', 'id'=>$model->history_id_item)),
	//array('label'=>'Delete OutboundItemsHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->history_id_item),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Outbound Items History', 'url'=>array('admin')),
);
?>

<h1>Outbund History # <?php echo $model->mainItem->part_number; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'history_id_item',
	//	'main_item_id',
		'mainItem.name',
		'mainItem.part_number',
		'quantity_moved',
		'current_quantity_in_stock',
		'available_quantity_in_stock',
		'comments',
		//'user_id',
		'user.username',
	
		array(  'name'=>'created',
					'value'=>(date('d-M-Y H:i',$model->created)),
			),
	),
));
//for getting search in view.  
 
//$model1=OutboundItemsHistory::model();
//echo "<br>";
//echo $this->renderPartial('admin',array('model'=>$model1));

echo "<br>";
echo "<br>";

?>

<h2> Remove more Items </h2>

<?php 
echo $this->forward('/Items/outboundSearch',false); 

?>
