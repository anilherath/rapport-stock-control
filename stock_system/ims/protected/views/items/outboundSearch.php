
<?php

$this->menu=array(
	array('label'=>'List  Outbound History', 'url'=>array('/OutboundItemsHistory/admin')),
);
?>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
 <div class="search-form" style="display:none"> 
<?php //$this->render('/OutboundItemsHistory/admin');
//)); ?>
</div> <!--search-form -->

<div>Click on <?php $add_img_url=Yii::app()->request->baseUrl.'/images/remove.png'; 
					echo CHtml::image($add_img_url,"ballpop",array("width"=>"16", "height"=>"16")); 
				?> 
	to remove items from stock. You can search by any of the following fields</div>
	
	
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	//'id'=>'items-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'item_id',
		'part_number',
		'name',
		'description',
		'barcode',
		'available_quantity',
		'current_quantity',

		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{add_quantity}',
		    'buttons'=>array
		    (
		        'add_quantity' => array
		        (
		            'label'=>'This Item is removed from Stock',
		            'imageUrl'=>Yii::app()->request->baseUrl.'/images/remove.png',
		        	//'click'=>'function(){alert("Adding to stock!");}',
		            //'url'=>'Yii::app()->createUrl("inboundItem/create", array("id"=>$data->id))',
		            //'url'=>'Yii::app()->createUrl("outboundItemsHistory/create")',
		            'url'=>'Yii::app()->createUrl("outboundItemsHistory/create" , array("main_item_id"=>$data->item_id,))',
		        ),
		        
		    ),
		)
		),
	)); 
?>	