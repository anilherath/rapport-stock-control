<?php
// $this->breadcrumbs=array(
// 	'Setups'=>array('index'),
// 	$model->id,
// );
?>

<div id="sidemenu">             
<?php include('setup_sidemenu.php'); ?>   
</div>

<h1>Your Company Details</h1>

<div style="text-align:right; " ><b>
<?php echo CHtml::link('Edit',array('update', 'id'=>$model->id)); ?></b>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'company',
		'address',
		'town',
		'postcode',
// 		'postcode_s',
// 		'postcode_e',
		'county',
		'country',
		'email',
		'telephone',
		'mobile',
		'alternate',
		'fax',
		//'postcodeanywhere_account_code',
		//'postcodeanywhere_license_key',
		'website',
		'vat_reg_no',
		'company_number',
		//'custom5',
	),
)); ?>
