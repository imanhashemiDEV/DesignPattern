<?php

namespace App\Models;

use App\Services\RequestService\RequestBuilder;

class Request
{
    private $url;
    private $method;
    private $params;
    private $headers;
    private $body;
    private $response;

    /**
     * @param $url
     */
    public function __construct(RequestBuilder $requestBuilder)
    {
        $this->url = $requestBuilder->getUrl();
        $this->method = $requestBuilder->getMethod();
        $this->params = $requestBuilder->getParams();
        $this->headers = $requestBuilder->getHeaders();
        $this->body = $requestBuilder->getBody();
        $this->response = $requestBuilder->getResponse();
    }


    public function run()
    {
        echo $this->url;
    }

}
