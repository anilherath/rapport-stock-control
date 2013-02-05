<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'setup-showUpdateProgress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company'); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'town'); ?>
		<?php echo $form->textField($model,'town'); ?>
		<?php echo $form->error($model,'town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode_s'); ?>
		<?php echo $form->textField($model,'postcode_s'); ?>
		<?php echo $form->error($model,'postcode_s'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode_e'); ?>
		<?php echo $form->textField($model,'postcode_e'); ?>
		<?php echo $form->error($model,'postcode_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'county'); ?>
		<?php echo $form->textField($model,'county'); ?>
		<?php echo $form->error($model,'county'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone'); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alternate'); ?>
		<?php echo $form->textField($model,'alternate'); ?>
		<?php echo $form->error($model,'alternate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax'); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcodeanywhere_account_code'); ?>
		<?php echo $form->textField($model,'postcodeanywhere_account_code'); ?>
		<?php echo $form->error($model,'postcodeanywhere_account_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcodeanywhere_license_key'); ?>
		<?php echo $form->textField($model,'postcodeanywhere_license_key'); ?>
		<?php echo $form->error($model,'postcodeanywhere_license_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website'); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat_reg_no'); ?>
		<?php echo $form->textField($model,'vat_reg_no'); ?>
		<?php echo $form->error($model,'vat_reg_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_number'); ?>
		<?php echo $form->textField($model,'company_number'); ?>
		<?php echo $form->error($model,'company_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custom5'); ?>
		<?php echo $form->textField($model,'custom5'); ?>
		<?php echo $form->error($model,'custom5'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->