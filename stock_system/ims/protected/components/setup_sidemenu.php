<?php
$this->menu=array(
	array('label'=>'User Setup', 'url'=>array('User/admin')),
	array('label'=>'Suppliers', 'url'=>array('/suppliers/admin')),
	array('label'=>'Mail Settings', 'url'=>array('setup/mailServer')),
	array('label'=>'Change Logo', 'url'=>array('setup/changeLogo')),
	array('label'=>'Internet', 'url'=>array('/advanceSettings/update&id=10001')),
	array('label'=>'Restore Database', 'url'=>array('setup/restoreDatabase')),
	array('label'=>'Import Data', 'url'=>array('import/itemsimport')),
	array('label'=>'About & Help', 'url'=>array('setup/about')),
);
?>