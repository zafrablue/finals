<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Color;
use app\models\size;
use yii\helpers\ArrayHelper;
?>
<h1>Create Product</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>
			<?= $form->field($model,'color_id')->dropDownList(ArrayHelper::map(
				Color::find()->asArray()->all(), 'id','color','shipping_address'))?>

            <?= $form->field($model,'size_id')->dropDownList(ArrayHelper::map(
				size::find()->asArray()->all(), 'id','size'))?>

			<?= $form->field($model, 'description')->textInput() ?>

			<?= $form->field($model, 'price')->textInput() ?>

			<?= $form->field($model, 'quantity')->textInput() ?>

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
