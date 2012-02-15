<?php
$this->breadcrumbs=array(
	'Outbound Items Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Outbound Items History', 'url'=>array('index')),
	array('label'=>'Manage Outbound Items History', 'url'=>array('admin')),
);
?>

<h1>Create Outbound Items History</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>