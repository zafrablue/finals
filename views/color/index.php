<?php
use app\models\Color;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Color',['/color/create'],
    ['class'=>'btn btn-primary ']); ?>
	</span>

	<span class="pull-right">
    <?= Html::a('Go to size',['/size/index'],
    ['class'=>'btn btn-primary']); ?>
    </span>

</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Color</th>
	</tr>

	<?php foreach ($color as $colors): ?> 
		<tr>
			<th><?=Html::a($colors->color,['/color/view','id'=> $colors ->id])?></th>
		</tr>
		<?php endforeach; ?>
</table>

