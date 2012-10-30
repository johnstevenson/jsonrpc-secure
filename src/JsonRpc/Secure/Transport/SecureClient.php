<?php
namespace JsonRpc\Secure\Transport;


class SecureClient
{

  public $output = '';
  public $error = '';

  private $transport = null;


  public function __construct(array $account, array $options = array())
  {
    $this->transport = new \AuthKey\Secure\Client($account, $options);
  }


  public function send($method, $url, $data, $headers = array())
  {

    if (is_array($headers) && $headers)
    {
      $this->transport->setCurlOption(CURLOPT_HTTPHEADER, $headers);
    }

    if ($this->transport->send($url, $data))
    {
      $this->output = $this->transport->output;

      return true;
    }
    else
    {
      $this->error = $this->transport->error;

      return false;
    }

  }


  public function __call($name, $arguments)
  {

    $callback = array($this->transport, $name);

    if (is_callable($callback))
    {
      call_user_func_array($callback, $arguments);
    }

  }


}
