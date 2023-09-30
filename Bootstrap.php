<?php

namespace openecontmd\internal_api;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        /*
         * Регистрация модуля в приложении
         * (вместо указания в файле config/web.php
         */
        $app->setModule('internal', 'openecontmd\internal_api\modules\internal\Module');
    }
}
