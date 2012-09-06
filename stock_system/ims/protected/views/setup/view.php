<?php
$this->breadcrumbs=array(
	'Setups'=>array('index'),
	$model->id,
);
?>

<div id="sidemenu">             
<?php include('setup_sidemenu.php'); ?>   
</div>

<h1>Setup</h1>

<div style="text-align:right;" >
<?php echo CHtml::link('Edit',array('update', 'id'=>$model->id)); ?>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company',
		'address',
		'town',
		'postcode_s',
		'postcode_e',
		'county',
		'country',
		'email',
		'telephone',
		'mobile',
		'alternate',
		'fax',
		'postcodeanywhere_account_code',
		'postcodeanywhere_license_key',
		'website',
		'vat_reg_no',
		'company_number',
		'postcode',
		'custom5',
	),
)); ?>
