<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license MIT
 */

namespace patmoshosting\craftpatmoss3;

use craft\web\assets\cp\CpAsset;
use yii\web\AssetBundle;

/**
 * Asset bundle for the Dashboard
 */
class AwsS3Bundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@patmoshosting/craftpatmoss3/resources';

    /**
     * @inheritdoc
     */
    public $depends = [
        CpAsset::class,
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/editVolume.js',
    ];
}
