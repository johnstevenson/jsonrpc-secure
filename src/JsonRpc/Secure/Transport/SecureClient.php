<?php
namespace JsonRpc\Secure\Transport;


class SecureClient
{

  public $output = '';
  public $error = '';

  private $account = array();
  private $options = array();


  public function __construct(array $account, array $options = array())
  {
    $this->account = $account;
    $this->options = $options;
  }


  public function send($method, $url, $data, $headers = array())
  {

    $client = new \AuthKey\Secure\Client($this->account, $this->options);

    if ($client->send($url, $data))
    {
      $this->output = $client->output;

      return true;
    }
    else
    {
      $this->error = $client->error;

      return false;
    }

  }


}
