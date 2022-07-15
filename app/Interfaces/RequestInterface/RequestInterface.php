<?php

namespace App\Interfaces\RequestInterface;

interface RequestInterface
{
    public function setUrl($url);
    public function getUrl();
    public function setMethod($method);
    public function getMethod();
    public function setParams($params);
    public function getParams();
    public function setHeaders($headers);
    public function getHeaders();
    public function setBody($body);
    public function getBody();
    public function setResponse($response);
    public function getResponse();
}
