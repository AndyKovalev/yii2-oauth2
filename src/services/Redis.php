<?php
/**
 * Redis.php
 *
 * PHP version 5.6+
 *
 * @author Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2016 Philippe Gaultier
 * @license http://www.sweelix.net/license license
 * @version XXX
 * @link http://www.sweelix.net
 * @package sweelix\oauth2\server\services
 */

namespace sweelix\oauth2\server\services;

use sweelix\oauth2\server\interfaces\ServiceBootstrapInterface;
use sweelix\oauth2\server\services\redis\AccessTokenService;
use sweelix\oauth2\server\services\redis\AuthCodeService;
use sweelix\oauth2\server\services\redis\ClientService;
use sweelix\oauth2\server\services\redis\CypherKeyService;
use sweelix\oauth2\server\services\redis\JtiService;
use sweelix\oauth2\server\services\redis\JwtService;
use sweelix\oauth2\server\services\redis\RefreshTokenService;
use sweelix\oauth2\server\services\redis\ScopeService;
use Yii;

/**
 * This is the service loader for redis
 *
 * @author Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2016 Philippe Gaultier
 * @license http://www.sweelix.net/license license
 * @version XXX
 * @link http://www.sweelix.net
 * @package sweelix\oauth2\server\services
 * @since XXX
 */
class Redis implements ServiceBootstrapInterface
{
    /**
     * @inheritdoc
     */
    public static function register()
    {
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\AccessTokenServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\AccessTokenServiceInterface', [
                'class' => AccessTokenService::className(),
                'namespace' => 'oauth2:accessTokens',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\AuthCodeServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\AuthCodeServiceInterface', [
                'class' => AuthCodeService::className(),
                'namespace' => 'oauth2:authCodes',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\ClientServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\ClientServiceInterface', [
                'class' => ClientService::className(),
                'namespace' => 'oauth2:clients',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\CypherKeyInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\CypherKeyInterface', [
                'class' => CypherKeyService::className(),
                'namespace' => 'oauth2:cypherKeys',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\JtiServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\JtiServiceInterface', [
                'class' => JtiService::className(),
                'namespace' => 'oauth2:jti',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\JwtServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\JwtServiceInterface', [
                'class' => JwtService::className(),
                'namespace' => 'oauth2:jwt',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\RefreshTokenServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\RefreshTokenServiceInterface', [
                'class' => RefreshTokenService::className(),
                'namespace' => 'oauth2:refreshTokens',
            ]);
        }
        if (Yii::$container->hasSingleton('sweelix\oauth2\server\interfaces\ScopeServiceInterface') === false) {
            Yii::$container->setSingleton('sweelix\oauth2\server\interfaces\ScopeServiceInterface', [
                'class' => ScopeService::className(),
                'namespace' => 'oauth2:scopes',
            ]);
        }
    }
}
