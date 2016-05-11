<?php

use yii\helpers\Html;

?>


<div class="col-md-12">

    <h1><?= Html::a($model->title, ['blog/view', 'id'=>$model->id]) ?></h1>
    <p><?= $model->content; ?></p>
    <div>
        <span class="badge"><?= "ID: ".$model->id; ?></span><div class="pull-right">

            <?php
            foreach ($model->tags as $value) {
                echo Html::a($value->title,['blog/index', 'tag'=>$value->title])." ";
            }
            ?>

        </div>
    </div>
    <hr>

</div>
