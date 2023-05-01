<?php

namespace Myolchauz\Mycashbackclient\Repositories;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\CashbackRequestBuilderInterface;

abstract class RequestBuilder
{
    protected $baseUri;
    protected $method;
    protected $path;
    protected $headers;
    protected $jsonBody;
    protected $auth;
    protected $body;
    protected $cookie;
    protected $timeout;

    public function __construct()
    {
        $this->baseUri = config('mycashbackclient.guzzleClient.cashback_app_base_url');
        $this->method = config('mycashbackclient.guzzleClient.method_type');
        $this->path = config('mycashbackclient.guzzleClient.path');
        $this->headers = [];
        $this->auth = [];
        $this->body = null;
        $this->cookie = null;
        $this->timeout = 6;
    }

    public function setBaseUri($baseUri = ''): CashbackRequestBuilderInterface
    {
        if (!empty($baseUri)) {
            $this->baseUri = $baseUri;
        }

        return $this;
    }

    public function setMethod(string $method = '') : CashbackRequestBuilderInterface
    {
        if (!empty($method)) {
            $this->method = $method;
        }
        return $this;
    }

    public function setPath(string $path = '') : CashbackRequestBuilderInterface
    {
        if (!empty($path)) {
            $this->path = $path;
        }
        return $this;
    }

    public function setJsonBody(array $jsonBody = []) : CashbackRequestBuilderInterface
    {
        $this->jsonBody = $jsonBody;
        return $this;
    }

    public function setHeaders(array $headers = []) : CashbackRequestBuilderInterface
    {
        $this->headers = $headers;
        return $this;
    }

    public function setAuth(array $auth = []) : CashbackRequestBuilderInterface
    {
        $this->auth = $auth;
        return $this;
    }

    public function setBody($body) : CashbackRequestBuilderInterface
    {
        $this->body = $body;
        return $this;
    }

    public function setCookie($cookie) : CashbackRequestBuilderInterface
    {
        $this->cookie = $cookie;
        return $this;
    }

    public function setTimeout(float $timeout = 6) : CashbackRequestBuilderInterface
    {
        $this->timeout = $timeout;
        return $this;
    }

    abstract public function sendRequest();
}
