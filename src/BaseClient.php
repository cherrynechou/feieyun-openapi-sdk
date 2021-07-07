<?php
/**
 * Created by : PhpStorm
 * User: cherrynechou
 * Date: 2021/5/14 0014
 * Time: 16:49
 */
namespace CherryneChou\EasyFeieYun;

use CherryneChou\EasyFeieYun\AccessToken\AccessToken;
use CherryneChou\EasyFeieYun\Kernel\Http\Client;
use CherryneChou\EasyFeieYun\Kernel\Traits\HasSign;

/**
 * Class BaseClient
 * @package CherryneChou\EasyYilianYun
 */
class BaseClient extends Client
{
    use HasSign;

    /**
     * @var Application
     */
    protected $app;

    /**
     * Client constructor.
     * @param Application $app
     * @param AccessToken $accessToken
     */
    public function __construct(Application $app, )
    {
        $this->app = $app;
        parent::__construct($app);
    }

    /**
     * @param String $url
     * @param array $data
     * @return mixed
     * @throws \CherryneChou\EasyYilianYun\Kernel\Exceptions\InvalidArgumentException
     * @throws \CherryneChou\EasyYilianYun\Kernel\Exceptions\InvalidConfigException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function httpPost(String $url, array $data=[], string $format = 'json')
    {
        $time = time();

        $params=[
            'user' => $this->app['config']->get('username'),
            'stime'=> $time,
            'sig' => $this->getSign($time),
            'apiname'=> $url,
        ];

        $response = $this->request($url, 'POST', ['form_params' => $data + $params])
            ->getBody()->getContents();

        return 'json' === $format ? \json_decode($response, true) : $response;

    }

}
