<?php

namespace kouosl\note\controllers\backend;

use kouosl\note\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $note = new Note();
        return $this->render('index', [
            'note' => $note,
        ]);
    }
}
