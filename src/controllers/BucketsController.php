<?php

namespace patmoshosting\craftpatmoss3\controllers;

use Craft;
use patmoshosting\craftpatmoss3\Fs;
use craft\helpers\App;
use craft\web\Controller as BaseController;
use yii\web\Response;

/**
 * This controller provides functionality to load data from AWS.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.0
 */
class BucketsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        $this->defaultAction = 'load-bucket-data';
    }

    /**
     * Load bucket data for specified credentials.
     *
     * @return Response
     */
    public function actionLoadBucketData(): Response
    {
        $this->requirePostRequest();
        $this->requireAcceptsJson();

        $request = Craft::$app->getRequest();
        $keyId = App::parseEnv($request->getRequiredBodyParam('keyId'));
        $secret = App::parseEnv($request->getRequiredBodyParam('secret'));

        try {
            return $this->asJson([
                'buckets' => Fs::loadBucketList($keyId, $secret),
            ]);
        } catch (\Throwable $e) {
            return $this->asFailure($e->getMessage());
        }
    }
}
