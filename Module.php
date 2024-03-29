<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\freeflow_extras;

use humhub\components\UrlManager;
use Yii;
use yii\helpers\Url;
use yii\web\JsonParser;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';


    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        Yii::$app->request->setBodyParams(null);
        Yii::$app->request->parsers['application/json'] = JsonParser::class;

        return parent::beforeAction($action);
    }

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {

    }
}
