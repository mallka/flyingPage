<?php

namespace mallka\flyingpage;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    
    public $js= ['flying-pages/flying-pages.js',];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/resources';
        parent::init();
    }
}
