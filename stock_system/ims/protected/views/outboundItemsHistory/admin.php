<?php
$this->breadcrumbs=array(
	'Outbound Items Histories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Outbound Items History', 'url'=>array('index')),
	//array('label'=>'Create OutboundItemsHistory', 'url'=>array('create')),
);

/*original.
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('outbound-items-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");*/

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

<h1>Manage Outbound Items Histories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search and Excel Output','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'outbound-items-history-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'history_id_item',
		//'main_item_id',
 		array( 'name'=>'part_number', 'value'=>'$data->mainItem->part_number' ),
 		array( 'name'=>'item_search', 'value'=>'$data->mainItem->name' ),
		'quantity_moved',
		'current_quantity_in_stock',
		'available_quantity_in_stock',
		'comments',
		'created',
		//'user_id',
		array( 'name'=>'username', 'value'=>'$data->user->username' ),
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
