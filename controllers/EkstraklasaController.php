<?php

namespace app\controllers;

use Yii;
use app\models\Ekstraklasa;
use app\models\Zawodnicy;
use yii\web\Controller;

class EkstraklasaController extends Controller
{
    public function actionIndex()
    {
        $ekstraklasa = Ekstraklasa::find()->all();
        return $this->render('index', ['ekstraklasa' => $ekstraklasa]);
    }
    public function actionZawodnicy($id)
    {
        $druzyna = Ekstraklasa::findOne($id);
        $zawodnicy = Zawodnicy::find()->where(['id_zespolu' => $id])->all();
        return $this->render('zawodnicy', ['zawodnicy' => $zawodnicy, 'druzyna' => $druzyna]);
    }
    public function actionDeleteZawodnik($id)
    {
        $zawodnik = Zawodnicy::findOne($id);
        if ($zawodnik !== null) {
            $zawodnik->delete();
        }
        return $this->redirect(['ekstraklasa/zawodnicy', 'id' => $zawodnik->id_zespolu]);
    }
    public function actionCreateZawodnik($id_zespolu)
    {
        $zawodnik = new Zawodnicy();
        $zawodnik->id_zespolu = $id_zespolu;

        if ($zawodnik->load(Yii::$app->request->post()) && $zawodnik->save()) {
            return $this->redirect(['ekstraklasa/zawodnicy', 'id' => $id_zespolu]);
        }

        return $this->render('create', [
            'zawodnik' => $zawodnik,
        ]);
    }
}