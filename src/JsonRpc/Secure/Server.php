<?php
namespace JsonRpc\Secure;


class Server extends \JsonRpc\Server
{

  public function __construct($authorize, $handler)
  {

    $authHandler = array(
      'authorize' => $authorize,
    );

    $transport = new \AuthKey\Secure\Server($authHandler);

    parent::__construct($handler, $transport);
  }

}
