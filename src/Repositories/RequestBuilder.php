<?php

namespace Myolchauz\Mycashbackclient\Repositories;


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
        
    }

    public function setHeaders(array $headers = []) {
        $this->headers = $headers;
    }

    public function setJsonBody(array $jsonBody = []) {
        $this->jsonBody = $jsonBody;
    }

    public function setAuth(array $auth = []) {
        $this->auth = $auth;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function setCookie($cookie) {
        $this->cookie = $cookie;
    }
    
    public function setTimeout(float $timeout = 6) {
        $this->timeout = $timeout;
    }
}