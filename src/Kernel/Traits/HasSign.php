<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/26 0026
 * Time: 15:53
 */

namespace CherryneChou\EasyFeieYun\Kernel\Traits;

/**
 * Trait HasSign
 * @package CherryneChou\EasyYilianYun\Kernel\Traits
 */
trait  HasSign
{
    /**
     * @param $timestamp
     * @return string
     */
    public function getSign($timestamp)
    {
        return sha1(
          $this->app['config']->get('username') .
          $this->app['config']->get('uKey') .
          $timestamp
        );
    }

}
