<?php
namespace albertgeeca\shop\widgets\assets;

use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */
class OrderCounterAsset extends AssetBundle
{
    public $sourcePath = '@vendor/albert-sointula/yii2-shop/widgets/assets/src';

    public $css = [
        'css/order-counter.css'
    ];
    public $js = [
    ];
    public $depends = [
    ];
}