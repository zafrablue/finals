<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Color</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>


			<?= $form->field($model, 'color')->textInput() ?>
			
			<div class="form-group">
    	<?= Html::submitButton("Update color", ['class'=>'btn btn-primary']); ?>
			</div>

			<?php ActiveForm::end(); ?>
