<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);



$this->menu=array(
	array('label'=>'List Users', 'url'=>array('admin')),
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);



?>

<h1>View User #<?php echo $model->id; ?></h1>
<div style="text-align: right;">
<?php echo CHtml::link('Edit',array('update', 'id'=>$model->id)); ?>
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
	//	'password',
		'email',
		'profile',
		array(  'name'=>'created',
					'value'=>(date('d-M-Y H:i',$model->created)),
			),
			array(  'name'=>'modified',
					'value'=>(date('d-M-Y H:i',$model->modified)),
			),
	),
)); ?>
