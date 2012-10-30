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


  public function setCurlOption($curlOption, $value)
  {
    $this->transport->setCurlOption($curlOption, $value);
  }


  public function setHeader($name, $value)
  {
    $this->transport->setHeader($name, $value);
  }


  public function setXHeader($name, $value)
  {
    $this->transport->setXHeader($name, $value);
  }


}

