<?php
use app\models\Tshirt;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Tshirt',['/tshirt/create'],
    ['class'=>'btn btn-primary']); ?>
	</span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Color</th>
		<th>Size</th>
        <th>Description</th>
        <th>price</th>
        <th>quantity</th>
	</tr>

	<?php foreach ($pro as $pros): ?> 
		<tr>
            <th><?=Html::a($pros->color->color,['/tshirt/view','id'=> $pros ->id])?></th>
            <th><?= $pros->size->size?></th>
			<th><?= $pros->description?></th>
			<th><?= $pros->price?></th>
			<th><?= $pros->quantity?></th>


		</tr>
		<?php endforeach; ?>
</table>

