<?php
$this->breadcrumbs=array(
	'Items'=>array('index'));

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Add New Items', 'url'=>array('create')),
);
/*original
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('items-grid', {
		data: $(this).serialize()
	});
	return false;
});
");*/

//for excel.
Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
});

$('#submit-button').click(function(){ 
        $.fn.yiiGridView.update('some-grid', {
                data: $('.search-form form').serialize()
        });
        return false;
});
				");

?>






<h1>Manage Items</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php //echo CHtml::link('Advanced Search and Export Excel','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php 
	$url=Yii::app()->request->getBaseUrl().'/items/admin/?&export=true';
	echo CHtml::link('Export to excel',$url);
?>
<small>&nbsp;(Only Available Quantities Items will be Exported)</small>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'items-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	
	'selectableRows'=>1,
	'selectionChanged'=>'function(id){ location.href="'.$this->createUrl('view').'/id/"+$.fn.yiiGridView.getSelection(id);} ',

	'columns'=>array(
		//'item_id',
	
		array(            
            'name'=>'available_quantity',
	 	 	'type'=>'html',
	 		'filter'=>false,
	 			
            'value'=>array($this,'gridStatusColumn'), 
        ),
		//'company_id',
		'part_number',
		'name',
		//'description',
		//'barcode',
// 		'location_room',
// 		'location_row',
// 		'location_column',
// 		'location_shelf',
		array(  'name'=>'location_room',
				'value'=>'"$data->location_room"."$data->location_row"."$data->location_column"."$data->location_shelf"',
				
			),
			
			
		//'suppliers_id',
		'current_quantity',
		'available_quantity',
		'fits_in_model',
			
		array(  'name'=>'modified',
				'type'=>'datetime',
				'filter'=>false,	
			),


	//	array( 'name'=>'supplier_name', 'value'=>'$data->suppliers->name' ),
	/*	
		array(
            'name'=>'available_quantity',
            'type'=>'raw',
            'value'=>'Items::model()->statusBarang($data->item_id)',
        ),
      */  

        
		

		
		/*		
		'category_id',
		'current_quantity',
		'available_quantity',
		'recommended_lowest_quantity',
		'recommended_highest_quantity',
		'remarks',
		'active',
		'image_url',
		'sale_price',
		'factory_due_date',
		
		'fits_in_model',
		'created',
		'modified',
		'deleted',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); 


?>
