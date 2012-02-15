<?php 	
	$this->layout=false;
	
	header('Content-type: application/json');
	
	$results = array ('results'=>'YaaIamTheOneYouAreLookingFor');
	
	echo CJSON::encode($results);
	//$json_file=CJSON::encode($model);
		
	Yii::app()->end();

	
	
	
	
?>
	