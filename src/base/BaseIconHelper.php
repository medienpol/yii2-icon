<?php

namespace medienpol\yii2icon\base;

use yii\helpers\Html;

/**
 * Class BaseIconHelper
 * @package medienpol\yii2icon\base
 *
 * Provides base methods to be used by child classes (e. g. Fontawesome, Glyphicon, etc.)
 */
class BaseIconHelper
{
    /**
     * @param $tag
     * @param string $content
     * @param array $options
     * @return mixed
     */
    public static function renderTag($tag, $content = '', $options = [])
    {
        return Html::tag($tag, $content, $options);
    }
}
