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
   * 查询订单是否打印成功接口
   * @return mixed
   * @throws \Psr\SimpleCache\InvalidArgumentException
   */
  public function queryOrderState($orderId)
  {
      return $this->httpPost('Open_queryOrderState', ['orderid' => $orderId]);
  }
}
