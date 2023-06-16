<?php

namespace app\controllers;

use app\models\QueueStatuses;
use Yii;

class QueueStatusesController extends MainController
{

    public function actionCreate()
    {

        $data = Yii::$app->request->bodyParams;
        $model = new QueueStatuses();
        $model->setAttributes($data);
        if (!$model->validate()) {
            return $this->jsonResponse($model->errors, 400);
        }
        $hasDirtyAttributes = false;
        $oldRecords = QueueStatuses::find()->where(['c_id' => $data['c_id']])->all();
        if (!empty($oldRecords)) {
            foreach ($oldRecords as $oldRecord) {
                $oldRecord->setAttributes($data);
                if (empty($oldRecord->dirtyAttributes)) {
                    $hasDirtyAttributes = false;
                    break;
                } else {
                    $hasDirtyAttributes = true;
                }
            }
        }
        if ($hasDirtyAttributes) {
            $save = $model->save();
            if ($save) {
                return $this->jsonResponse('Queue Statuses updated', 400);
            } else {
                return $this->jsonResponse($model->getErrors(), 400);
            }
        }
        return $this->jsonResponse('No changes in queue statuses was made');
    }
}
