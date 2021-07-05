<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/25 0025
 * Time: 17:22
 */
namespace CherryneChou\EasyFeieYun\Order;

use CherryneChou\EasyFeieYun\BaseClient;

/**
 * Class Client
 * @package CherryneChou\EasyYilianYun\Printer
 */
class Client extends BaseClient
{
  /**
   * Registers services on the given container.
   * This method should only be used to configure services and parameters.
   * It should not get services.
   *
   * @param \Pimple\Container $pimple A container instance
   */
  public function register(Container $pimple)
  {
      $pimple['order'] = function ($app) {
          return new Client($app);
      };
  }
}
