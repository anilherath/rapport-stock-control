<?php
$this->breadcrumbs=array(
	'Purchase Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Purchase Order', 'url'=>array('index')),
	array('label'=>'Create Purchase Order', 'url'=>array('/suppliers/purchaseOrder')),
);
 
?>



<h1>Manage Purchase Orders</h1>

 
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'purchase-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
		
	'columns'=>array(
		//'id',

		'order_number',
			
		array( 'name'=>'supplier_name',
				'type'=>'raw',
				'value'=>'CHtml::link($data->suppliers->name,Yii::app()->createUrl("purchaseOrder/preview" , array("id"=>$data->id,)))',
				),
		
			
		//'suppliers_id',
/*
		array( 'name'=>'supplier_name', 
				'value'=>'$data->suppliers->name'
				),
	*/
		//'user_id',
		array( 'name'=>'user_name', 'value'=>'$data->user->name'),
		//'order_status',
		array
		(
			'type'=>'html',
			'name'=>'order_status',
			'value'=>'$data->getOrderStatus($data->order_status)',
			'filter'=>false,
		),
			array(  'name'=>'date_of_order',
					'type'=>'datetime',
					
			),
			array(  'name'=>'date_of_order_recieved',
					'type'=>'datetime',
					
				),
			
		/*
		'total_cost',
		'vat',
		'net_cost',
		'created',
		'modified',
		'cancelled',
		*/
//		array(
//			'class'=>'CButtonColumn',
//			'template'=>'{update}',
//			'url'=>'Yii::app()->createUrl("outboundItemsHistory/create")',
//		),
		
		array(
		'class'=>'CButtonColumn',
		'template'=>'{update}',
		'buttons'=>array(
			'update'=>array(
					'url'=>'Yii::app()->createUrl("purchaseOrder/preview" , array("id"=>$data->id,))',
					),
				),
					),
					
	),
)); ?>
