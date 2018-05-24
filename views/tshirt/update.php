<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Tshirt</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model, 'color_id')->textInput() ?>
        
			<?= $form->field($model, 'size_id')->textInput() ?>


			<?= $form->field($model, 'description')->textInput() ?>

			<?= $form->field($model, 'price')->textInput() ?>

			<?= $form->field($model, 'quantity')->textInput() ?>
			
			<<div class="form-group">
    	<?= Html::submitButton("Update Tshirt", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
