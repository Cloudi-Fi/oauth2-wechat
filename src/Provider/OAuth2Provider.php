<?php


namespace Oakhope\OAuth2\Client\Provider;

use Oakhope\OAuth2\Client\Provider\WebProvider;

class OAuth2Provider extends WebProvider
{
    /**
     * Returns the base URL for authorizing a client.
     *
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://open.weixin.qq.com/connect/oauth2/authorize';
    }
}
