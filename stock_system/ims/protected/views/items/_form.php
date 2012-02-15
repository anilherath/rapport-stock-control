<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'company_id'); ?>
		<?php //echo $form->textField($model,'company_id'); ?>
		<?php //echo $form->error($model,'company_id'); ?>
	</div>

	--><div class="row">
		<?php echo $form->labelEx($model,'part_number'); ?>
		<?php echo $form->textField($model,'part_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'part_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_room'); ?>
		<?php //echo $form->dropDownList($model,'location_room',array('1'=>1, '2'=>2,'3'=>3, '4'=>4,'5'=>5, '6'=>6,));?>
		<?php echo $form->textField($model,'location_room',array('size'=>4,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'location_room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_row'); ?>
		<?php //echo $form->dropDownList($model,'location_row',array('A'=>'A', 'B'=>'B','C'=>'C', 'D'=>'D','E'=>'E', 'F'=>'F','G'=>'G','H'=>'H','I'=>'I','J'=>'J','K'=>'K','L'=>'L',));?>
		<?php echo $form->textField($model,'location_row',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'location_row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_column'); ?>
		<?php echo $form->dropDownList($model,'location_column',array('1'=>1, '2'=>2,'3'=>3, '4'=>4,'5'=>5, '6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11,'12'=>12,));?>
		<?php //echo $form->textField($model,'location_column',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'location_column'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_shelf'); ?>
		<?php echo $form->dropDownList($model,'location_shelf',array('1'=>1, '2'=>2,'3'=>3, '4'=>4,'5'=>5, '6'=>6, '7'=>7, '8'=>8,));?>
		<?php //echo $form->textField($model,'location_shelf',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'location_shelf'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'category_id'); ?>
		<?php //echo $form->textField($model,'category_id'); ?>
		<?php //echo $form->error($model,'category_id'); ?>
	</div>

	--><div class="row">
		<?php echo $form->labelEx($model,'current_quantity'); ?>
		<?php echo $form->textField($model,'current_quantity'); ?>
		<?php echo $form->error($model,'current_quantity'); ?>
		<input type="hidden" name="original_quantity" value="<?php echo $model->current_quantity; ?>" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_quantity'); ?>
		<?php echo $form->textField($model,'available_quantity'); ?>
		<?php echo $form->error($model,'available_quantity'); ?>
		<input type="hidden" name="original_available_quantity" value="<?php echo $model->available_quantity; ?>" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommended_lowest_quantity'); ?>
		<?php echo $form->textField($model,'recommended_lowest_quantity'); ?>
		<?php echo $form->error($model,'recommended_lowest_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommended_highest_quantity'); ?>
		<?php echo $form->textField($model,'recommended_highest_quantity'); ?>
		<?php echo $form->error($model,'recommended_highest_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'active'); ?>
		<?php //echo $form->textField($model,'active'); ?>
		<?php //echo $form->error($model,'active'); ?>
	</div>

	--><div class="row">
		<?php echo $form->labelEx($model,'image_url'); ?>
		<?php echo $form->textField($model,'image_url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price'); ?>
		<?php echo $form->error($model,'sale_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factory_due_date'); ?>
		<?php echo $form->textField($model,'factory_due_date'); ?>
		<?php echo $form->error($model,'factory_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suppliers_id'); ?>
		<?php //echo $form->textField($model,'supplier_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'suppliers_id', $model->getSuppliersName());?>
		<?php //echo CHtml::activeDropDownList($modelA, 'supplier_id', CHtml::listData($modelA->supplier, 'supplier_id', 'name'))?>
		<?php //echo CHtml::activeDropDownList($modelA, 'relation_fk', CHtml::listData($modelA->relationName, 'id', 'attributeYouWantToShowOtherthanID'))?>
		<?php //echo $form->dropDownList($model,'supplier_id', CHtml::listData(Suppliers::model()->findAll(), 'id', 'name'));?>
		<?php //echo $form->dropDownList($model, 'supplier_id', CHtml::listData($model->supplier, 'id', 'name'));?>
		<?php echo $form->error($model,'suppliers_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fits_in_model'); ?>
		<?php echo $form->textArea($model,'fits_in_model',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fits_in_model'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'created'); ?>
		<?php //echo $form->textField($model,'created'); ?>
		<?php //echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'modified'); ?>
		<?php //echo $form->textField($model,'modified'); ?>
		<?php //echo $form->error($model,'modified'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'deleted'); ?>
		<?php //echo $form->textField($model,'deleted'); ?>
		<?php //echo $form->error($model,'deleted'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->