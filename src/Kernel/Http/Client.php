<?php
namespace CherryneChou\EasyFeieYun\Kernel\Http;

use CherryneChou\EasyFeieYun\Application;

/**
 * Class Client
 * @package CherryneChou\EasyYilianYun\Kernel\Http
 */
class Client
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var string
     */
    protected $baseUri = "http://api.feieyun.cn/Api/Open/";

    /**
     * BaseClient constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

}
