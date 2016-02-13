<?php

namespace medienpol\yii2icon\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package medienpol\yii2icon\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome/';

    /**
     * init the asset
     */
    public function init()
    {
        $this->css = [
            'css/font-awesome.min.css'
        ];
    }
}
