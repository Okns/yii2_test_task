<?php

namespace app\controllers;

use app\models\QueueStatuses;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class MainController extends Controller
{
    public function jsonResponse($data, $status = 200)
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->statusCode = $status;
        $response->data = [
            'success' => $status == 200 ?? false,
            'message' => $data
        ];

        return $response;
    }
}
