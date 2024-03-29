<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\freeflow_extras;

use Yii;
use yii\web\JsonParser;
use yii\helpers\Url;

class Events
{
    public static function onBeforeRequest($event)
    {

        Yii::$app->urlManager->addRules([

		['pattern' => 'join/<space_url:[0-9a-zA-Z\-]+>', 'route' => 'freeflow_extras/space/space/join', 'verb' => ['GET', 'HEAD']],

        ], true);
    }
}
