<?php
/**
 * Created by PhpStorm.
 * User: ClassAdmin
 * Date: 02.10.2019
 * Time: 11:35
 */

namespace app\controllers;

use app\models\DemoXml;
use yii\web\Controller;

class DemoController extends Controller
{

    public function actionXml() {
        $model_xml = new DemoXml();
        header("Content-type: text/xml");
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_XML;

      return $model_xml->generateXml();
    }
}