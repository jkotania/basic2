<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $zawodnicy app\models\Zawodnicy[] */

$this->title = 'Zawodnicy - ' . Html::encode($druzyna->druzyna);
?>
<div class="zawodnicy-index">

    <h1 style="text-align: center; margin:10px">
        <?= Html::encode($this->title) ?>
        
    </h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Pochodzenie</th>
                <th>Wiek</th>
                <th>Numer</th>
                <th>Pozycja</th>
                <th><?= Html::a('Dodaj zawodnika', ['ekstraklasa/create-zawodnik', 'id_zespolu' => $druzyna->lp], ['class' => 'btn btn-success']) ?> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zawodnicy as $player): ?>
                <tr>
                    <td><?= Html::encode($player->id) ?></td>
                    <td><?= Html::encode($player->imie) ?></td>
                    <td><?= Html::encode($player->nazwisko) ?></td>
                    <td><?= Html::encode($player->pochodzenie) ?></td>
                    <td><?= Html::encode($player->wiek) ?></td>
                    <td><?= Html::encode($player->numer) ?></td>
                    <td><?= Html::encode($player->pozycja) ?></td>
                    <td>
                        <?= Html::a('Usuń', ['ekstraklasa/delete-zawodnik', 'id' => $player->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Czy na pewno chcesz usunąć tego zawodnika?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>