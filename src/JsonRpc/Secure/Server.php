<?php
namespace JsonRpc\Secure;


class Server extends \JsonRpc\Server
{

  public function __construct($methodHandler, $authorizeHandler, array $options = array())
  {

    $handlers = array(
      'authorize' => $authorizeHandler,
    );

    $transport = new Transport\SecureServer($handlers, $options);
    parent::__construct($methodHandler, $transport);

  }

}
