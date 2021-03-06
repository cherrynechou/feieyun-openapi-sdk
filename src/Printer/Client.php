<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/25 0025
 * Time: 17:22
 */
namespace CherryneChou\EasyYilianYun\Printer;

use CherryneChou\EasyYilianYun\BaseClient;

/**
 * Class Client
 * @package CherryneChou\EasyYilianYun\Picture
 */
class Client extends BaseClient
{
    /**
     * @param $machineCode
     * @param $content
     * @param $originId
     * @return mixed
     * @throws \CherryneChou\EasyYilianYun\Kernel\Exceptions\InvalidArgumentException
     * @throws \CherryneChou\EasyYilianYun\Kernel\Exceptions\InvalidConfigException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function createPrinterMsg($sn, $content, $times)
    {
        return $this->httpPost('Open_printMsg', ['sn' => $sn, 'content' => $content, 'times' => $times]);
    }
}
