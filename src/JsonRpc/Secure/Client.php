<?php
namespace JsonRpc\Secure;


class Client extends \JsonRpc\Client
{


  public function __construct(array $account, $url, $options = array())
  {
    $transport = new JsonRpc\Secure\Transport\SecureClient($account, $options);
    parent::__construct($url, $transport);
  }


}

