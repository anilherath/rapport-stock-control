<?php
$this->breadcrumbs=array(
	'Inbound Items Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inbound Items History', 'url'=>array('index')),
	array('label'=>'Manage Inbound Items History', 'url'=>array('admin')),
);
?>

<h1>Create Inbound Items History</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>