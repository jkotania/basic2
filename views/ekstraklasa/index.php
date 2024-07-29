<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $ekstraklasa app\models\Ekstraklasa[] */

$this->title = 'Ekstraklasa - TOP 7 Drużyn';
?>
<div class="ekstraklasa-index">
    <h1 style="text-align: center; margin:10px"><?= Html::encode($this->title) ?></h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Miejsce</th>
                <th>Druzyna</th>
                <th>Mecze</th>
                <th>Punkty</th>
                <th>Zwyciestwa</th>
                <th>Remisy</th>
                <th>Porazki</th>
                <th>Zdobyte Bramki</th>
                <th>Stracone Bramki</th>
                <th>Skład</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ekstraklasa as $team): ?>
                <tr>
                    <td><?= Html::encode($team->lp) ?></td>
                    <td><?= Html::encode($team->druzyna) ?></td>
                    <td><?= Html::encode($team->mecze) ?></td>
                    <td><?= Html::encode($team->punkty) ?></td>
                    <td><?= Html::encode($team->zwyciestwa) ?></td>
                    <td><?= Html::encode($team->remisy) ?></td>
                    <td><?= Html::encode($team->porazki) ?></td>
                    <td><?= Html::encode($team->zdobyte_bramki) ?></td>
                    <td><?= Html::encode($team->stracone_bramki) ?></td>
                    <td>
                        <?= Html::a('Zawodnicy', ['ekstraklasa/zawodnicy', 'id' => $team->lp], ['class' => 'btn btn-primary']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>