<?php
namespace JsonRpc\Secure;


class Client extends \JsonRpc\Client
{

  private $transport = null;


  public function __construct(array $account, $url, array $options = array())
  {
    $this->transport = new Transport\SecureClient($account, $options);
    parent::__construct($url, $this->transport);
  }


  public function __call($name, $arguments)
  {
    call_user_func_array(array($this->transport, $name), $arguments);
  }


}

