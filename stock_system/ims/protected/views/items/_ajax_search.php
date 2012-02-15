<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Create Items', 'url'=>array('create')),
	);

?>
 
 
 
 
<?php 

// 
// 	echo $r->part_number." ======";
// 	echo $r->name."<br>";
// }


echo "<br><br>";?>



<table class="grid-view">
<thead>
<tr>
<th>Status</th>
<th>Part Number</th>
<th>Name </th>
<th>Current<br>Quantity</th>
<th>Available<br> Quantity</th>
<th>Location</th>
</tr>
</thead>
<tbody>
<?php 

$i=0;
foreach ($results as $row)
  {
  	
  	$id=$row['item_id'];
   // echo "Title: ".$row['name']."<br />";
	if ($i==0){
	    ?>
		<tr class="odd">	
		<?php 
		$i=1;
		}//end of if
		else{ 
			?>
			<tr class="even">
			<?php
			$i=0;
			}//end of else	
	?>	
	<td>
	<?php if ($row['available_quantity']==0){?>

				<img src="<?php echo Yii::app()->baseUrl.'/images/red.png';?>" alt="Add this Item in Stock">
					<?php }
			elseif ($row['available_quantity']<$row['recommended_lowest_quantity'])
			{
			?>
				<img src="<?php echo Yii::app()->baseUrl.'/images/yellow.png';?>" alt="Add this Item in Stock">
			<?php 				}
				else 
				{
				?>

				<img src="<?php echo Yii::app()->baseUrl.'/images/green.png';?>" alt="Add this Item in Stock">
					<?php 
				}
	
	?>
	</td>
	<td><a href="<?php echo Yii::app()->baseUrl.'/Items/View/'.$id; ?>"><?php echo $row['part_number']?></a></td>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['current_quantity']?></td>
	<td><?php echo $row['available_quantity']?></td>
	<td><?php echo $row['location_room']."  ".$row['location_row']."  ".$row['location_column']."  ".$row['location_shelf']."  "?></td>
	</tr>
	<?php 
  }//end of while

?>

</tbody>
</table>