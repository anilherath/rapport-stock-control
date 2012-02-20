<?php 
  
  $this->menu=array(
	array('label'=>'List Inbound History', 'url'=>array('/InboundItemsHistory/admin')),
);
  
  ?>
  
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div> <!--search-form -->

<div>Click on <?php $add_img_url=Yii::app()->request->baseUrl.'/images/add.png'; 
					echo CHtml::image($add_img_url,"ballpop",array("width"=>"16", "height"=>"16")); 
				?> 
	to add items in stock. You can search by any of the following fields</div>
 
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
		'current_quantity',
		'available_quantity',
			
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{add_quantity}',
		    'buttons'=>array
		    (
		        'add_quantity' => array
		        (
		            'label'=>'Add this Item in Stock',
		            'imageUrl'=>Yii::app()->request->baseUrl.'/images/add.png',
		        	//'click'=>'function(){alert("Adding to stock!");}',
		            //'url'=>'Yii::app()->createUrl("inboundItem/create", array("id"=>$data->id))',
		            'url'=>'Yii::app()->createUrl("inboundItemsHistory/create" , array("main_item_id"=>$data->item_id,))',
		        ),
		        
		    ),
		)
	),
	
)); ?>
  