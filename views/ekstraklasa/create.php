<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $zawodnik app\models\Zawodnicy */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Dodaj Zawodnika';
?>
<div class="zawodnicy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="zawodnicy-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($zawodnik, 'imie')->textInput(['maxlength' => true]) ?>

        <?= $form->field($zawodnik, 'nazwisko')->textInput(['maxlength' => true]) ?>

        <?= $form->field($zawodnik, 'pochodzenie')->textInput(['maxlength' => true]) ?>

        <?= $form->field($zawodnik, 'wiek')->textInput() ?>

        <?= $form->field($zawodnik, 'numer')->textInput() ?>

        <?= $form->field($zawodnik, 'pozycja')->textInput(['maxlength' => true]) ?>

        <?= $form->field($zawodnik, 'id_zespolu')->hiddenInput()->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>