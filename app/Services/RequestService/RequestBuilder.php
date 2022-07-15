<?php

namespace App\Services\RequestService;

use App\Interfaces\RequestInterface\RequestInterface;
use App\Models\Request;

class RequestBuilder implements RequestInterface
{

    private $url;
    private $method;
    private $params;
    private $headers;
    private $body;
    private $response;

    public static function init(): RequestBuilder
    {
        return new RequestBuilder();
    }

    public function setUrl($url): RequestBuilder
    {
      $this->url = $url;
      return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setMethod($method): RequestBuilder
    {
       $this->method = $method;
       return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setParams($params): RequestBuilder
    {
        $this->params = $params;
        return $this;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setHeaders($headers): RequestBuilder
    {
        $this->headers = $headers;
        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setBody($body): RequestBuilder
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setResponse($response): RequestBuilder
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function build():Request
    {
        return new Request($this);
    }

}
