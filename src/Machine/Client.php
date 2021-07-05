<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/25 0025
 * Time: 17:22
 */
namespace CherryneChou\EasyFeieYun\Machine;

use CherryneChou\EasyFeieYun\BaseClient;

/**
 * Class Client
 * @package CherryneChou\EasyYilianYun\Printer
 */
class Client extends BaseClient
{
  /**
   * 添加打印机接口
   * @return mixed
   * @throws \Psr\SimpleCache\InvalidArgumentException
   */
  public function addPrinter($printerContent)
  {
      return $this->httpPost('Open_printerAddlist', ['printerContent' => $printerContent]);
  }

  /**
  * 修改打印机信息接口
  * @param  [string] $sn       [打印机编号]
  * @param  [string] $name     [打印机备注名称]
  * @param  [string] $phonenum [打印机流量卡号码,可以不传参,但是不能为空字符串]
   * @return [string]           [接口返回值]
  */
  public function editPrint($sn, $name, $phonenum)
  {
      return $this->httpPost('Open_printerEdit', ['sn' => $sn, 'name'=>$name, 'phonenum'=>$phonenum]);
  }


}
