<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/18 0018
 * Time: 17:29
 */
namespace CherryneChou\EasyFeieYun;

use CherryneChou\EasyYilianYun\Kernel\Support\Collection;
use Pimple\Container;
/**
 * Class Application
 * @package CherryneChou\EasyYilianYun
 */
class Application extends Container
{
    /**
     * @var array
     */
    protected $providers = [
        Machine\ServiceProvider::class,     //打印机
        Printer\ServiceProvider::class,     //打印
        Order\ServiceProvider::class,      //订单
    ];

    /**
     * Application constructor.
     * @param array $config
     * @param array $values
     */
    public function __construct($config = [], array $values = [])
    {
        parent::__construct($values);

        $this['config'] = function () use ($config) {
            return new Collection($config);
        };

        $this->registerProviders();
    }

    // 注册服务
    private function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this[$name];
    }
}
