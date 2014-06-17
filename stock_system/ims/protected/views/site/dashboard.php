        
<style type="text/css">

.notification {
	background-color: #FAF88D;
	border-radius: 15px;
	vertical-align: top;
	width: 75%;
}
</style>

<table class="notification">
	<tr><td>
	
		<span><b>&nbsp;&nbsp;Notifications</b></span><br><br>
		<?php
		$setupModel = Setup::model()->findByPk(1);
		$internet_connected =  AdvanceSettings::model()->findByAttributes(array('parameter'=>'internet_connected'));
		$current_url= Yii::app()->getBaseUrl(true);
		
		if ($internet_connected->value==1)
		{
		
			if(Setup::model()->checkInternet())
			{
			$update_url = $setupModel->version_update_url;		
			$request = $update_url.'/latest_stocksystem_version.txt';
			//$available_version = file_get_contents($request, true);
			
			$available_version = file_get_contents($request, true);
			$installed_version=Yii::app()->params['software_version'];
			if ($available_version!=$installed_version)
				{	?>
				Your current version is <?php echo $installed_version; ?>.<BR>
				There is a new updated version <?php echo $available_version ?> available for this software.<BR> Please go to rapportsoftware.co.uk to download and update the package.
				<?php 
				}//end if inner if(version compare)
			}//end of if(internet from Google)
		else
			{
				echo "<span style='color:red'><b>No Internet. All internet features like notifications, email, sms have been disabled.</b></span>";
				//We will set the settings in the database back to offline so that the performance is not affected
				Yii::app()->controller->redirect(array('Setup/Disableinternet', 'current_url'=>$current_url));
			}
		}// end of if internet from database
	else
			{
			echo "<span style='color:red'><b>Internet connection not available.You will not be able to use any internet serivce like emails, sms or notifications<br>Please Connect to Internet and enable connection from here.</b></span><br><br>";
		echo CHtml::link('Enable Internet',array('Setup/Enableinternet', 'current_url'=>$current_url));
			
		 	
			
			}
?>

		<br><br>	
		</td>
	</tr>
</table>

