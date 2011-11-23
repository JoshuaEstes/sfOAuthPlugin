<?php

/**
 *
 */
class sfOAuthToken
{

  public $key;
  public $secret;

  /**
   * key = the token
   * secret = the token secret
   */
  function __construct()
  {
    $this->key = sfConfig::get('app_oauth_consumer_key');
    $this->secret = $secret;
  }

  /**
   * generates the basic string serialization of a token that a server
   * would respond to request_token and access_token calls with
   */
  function to_string()
  {
    return "oauth_token=" .
    sfOAuthUtil::urlencode_rfc3986($this->key) .
    "&oauth_token_secret=" .
    sfOAuthUtil::urlencode_rfc3986($this->secret);
  }

  function __toString()
  {
    return $this->to_string();
  }

}