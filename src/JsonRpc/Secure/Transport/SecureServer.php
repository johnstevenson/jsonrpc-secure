<?php
namespace JsonRpc\Secure\Transport;


class SecureServer
{

  private $transport = null;


  public function __construct(array $handlers, array $options = array())
  {
    $this->transport = new \AuthKey\Secure\Server($handlers, $options);
  }


  public function receive()
  {
    return $this->transport->receive();
  }


  public function reply($data)
  {
    $this->transport->reply($data);
    exit;
  }


}

