<?php
namespace JsonRpc\Secure;


class Client extends \JsonRpc\Client
{


  public function __construct(array $account, $uri, $options = array())
  {
    $transport = new \AuthKey\Secure\Client($account, $options);
    parent::__construct($uri, $transport);
  }


}

