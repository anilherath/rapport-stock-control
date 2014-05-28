<h1>Importing Items </h1> 

<?php
$actionpath=Yii::app()->getBaseUrl()."/index.php?r=Import/csvuploadandimport";
//echo $actionpath;

?>
<form enctype="multipart/form-data" action="<?php echo $actionpath; ?>" method="POST">
Choose a file to upload: <input name="uploadedfile" type="file" /><br />

<input type="submit" value="Upload File" /><br><br><br>
<small><font color='green'> Note: Please make sure the uploaded file should be same as the sample file.<br>
</font></small><?php
 
	//echo CHtml::link('Sample file',array('Site/readSample'));
	echo CHtml::link('Sample file','uploads/sample_import_file.csv');
 
 
 ?>
</form>

<br>
<br>
<br>
 
 <style>
 
 .tt {
		border:1px solid black;

}

</style>
 <?php
 echo "<table class='tt'>";
		$file_handle = fopen("uploads/sample_import_file.csv","r");
		$i=0;
		//while loop
		while (!feof($file_handle) ) {
		echo "<tr>";
		$line_of_text = fgetcsv($file_handle, 1024);
		echo  "<td  class='tt'>".$line_of_text[0]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[1]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[2]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[3]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[4]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[5]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[6]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[7]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[8]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[9]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[10]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[11]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[12]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[13]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[14]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[15]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[16]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[17]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[18]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[19]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[20]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[21]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[22]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[23]. "</td>";
		echo  "<td  class='tt'>".$line_of_text[24]. "</td>";
		
		
		
		
		
		
		$i++;
		echo "</tr>";
		}////end of while (!feof($file_handle) )

		fclose($file_handle);

echo "</table>";
		
 ?>
