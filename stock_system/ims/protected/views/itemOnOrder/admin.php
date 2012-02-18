<?php
$this->breadcrumbs=array(
	'Item On Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Item On Order', 'url'=>array('index')),
	//array('label'=>'Create ItemOnOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('item-on-order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Item On Orders</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-on-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'purchase_order_id',
			//'order_status',
		//'suppliers_id',
		//'item_status',
		//'out_of_stock_factory_date',
			
//		array( 'name'=>'order_number', 'value'=>'$data->purchaseOrder->order_number'),
		array( 'name'=>'order_number',
					'type'=>'raw',
					'value'=>'CHtml::link($data->purchaseOrder->order_number,Yii::app()->createUrl("purchaseOrder/preview" , array("id"=>$data->purchase_order_id,)))',
			),
		array( 'name'=>'item_name', 'value'=>'$data->items->name'),
		array( 'name'=>'part_number', 'value'=>'$data->items->part_number'),
			//'order_status',
		
			
		array
			(
					'type'=>'html',
					'name'=>'item_status',
					'value'=>'$data->getItemStatus($data->item_status)',
					'filter'=>false,
			),

			array(  'name'=>'created',
					'type'=>'datetime',
				//	'filter'=>false,
			),
			/*
		array(
					'name'=>'item_status',
					'value'=>'Lookup::item("item_status",$data->getItemStatus($data->item_status))',
					'filter'=>Lookup::items('item_status'),
			),
		*/
		array( 'name'=>'supplier_name', 'value'=>'$data->suppliers->name'),
			array(
					'class'=>'CButtonColumn',
					'template'=>'{view}',
			),
			

		/*
		'factory_due_date',
		'quantity_ordered',
		'unit_price',
		'total_price',
		'created',
		
		array(
			'class'=>'CButtonColumn',
		),
		*/
	),
)); ?>
