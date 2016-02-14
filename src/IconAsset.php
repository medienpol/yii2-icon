<?php

namespace medienpol\yii2icon;

use yii\web\AssetBundle;
use yii\bootstrap\BootstrapAsset;
use medienpol\yii2icon\assets\FontAwesomeAsset;

/**
 * Class IconAsset
 * @package medienpol\yii2icon
 */
class IconAsset extends AssetBundle
{
    /**
     * init the asset
     */
    public function init()
    {
        $this->depends = [
            FontAwesomeAsset::className(),
            BootstrapAsset::className(),
        ];
    }
}
