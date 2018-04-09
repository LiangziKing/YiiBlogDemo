<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Comment;
use common\models\Commentstatus;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList(Commentstatus::find()
                                      ->select(['name','id'])
                                      ->orderBy('position')
                                      ->indexBy('id')
                                      ->column(),
                                      ['prompt'=>'请选择状态']); ?>

<!--     <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'userid')->textInput() ?> -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'post_id')->textInput() ?> -->

    <?= $form->field($model, 'remind')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
