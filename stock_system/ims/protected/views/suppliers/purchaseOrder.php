<?php

$this->menu=array(
	//array('label'=>'List Suppliers', 'url'=>array('PurchaseOrder/index')),
	//array('label'=>'Create Suppliers', 'url'=>array('create')),
	array('label'=>'Manage Purchase Orders', 'url'=>array('PurchaseOrder/admin')),
);

?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	//'id'=>'suppliers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'address',
		'town',
		'postcode',
		'country',
        array(
      		'name'=>'prefered_supplier',
      		//'value'=>'$data->prefered_supplier == 1 ? "Yes" : "No"',
      		//'value'=>'$data->prefered_supplier ? \'Yes\':\'No\'',
      		'value'=>'$data->prefered_supplier ? "Yes" : "No"',
      		//'value' => '$data->prefered_supplier == 0 ? "No" : "Yes"',
    		'type'=>'text',
    	),
		/*
		'contact_number',
		'email',
		'website',
		'lead_time_days',
		'free_carriage_min_amt',
		'vat_reg_no',
		'prefered_supplier',
		'created',
		'modified',
		*/
//		array(
//			'class'=>'CButtonColumn',
//			'template'=>'{view}	{update}',
//		),
		
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{add_supplier}',
		    'buttons'=>array
		    (
		        'add_supplier' => array
		        (
		            'label'=>'This supplier is selected',
		            'imageUrl'=>Yii::app()->request->baseUrl.'/images/add.png',
		        	//'click'=>'function(){alert("Adding to stock!");}',
		            //'url'=>'Yii::app()->createUrl("inboundItem/create", array("id"=>$data->id))',
		           
		            'url'=>'Yii::app()->createUrl("PurchaseOrder/autoCreate", array("suppliers_id"=>$data->id,))',
		        ),
		        
		    ),
		)
	),
)); ?>
