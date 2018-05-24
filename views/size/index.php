	<?php
use app\models\Size;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Size',['/size/create'],
    ['class'=>'btn btn-primary']); ?>
	</span>

	<span class="pull-right">
    <?= Html::a('Go to color',['/color/index'],
    ['class'=>'btn btn-primary']); ?>
    </span>

</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Size</th>
	</tr>

	<?php foreach ($size as $sizes): ?> 
		<tr>
			<th><?=Html::a($sizes->size,['/size/view','id'=> $sizes ->id])?></th>
		</tr>
		<?php endforeach; ?>
</table>

