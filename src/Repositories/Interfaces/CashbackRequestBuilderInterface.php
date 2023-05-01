<?php

namespace Myolchauz\Mycashbackclient\Repositories\Interfaces;

interface CashbackRequestBuilderInterface
{
    public function setBaseUri($baseUri): CashbackRequestBuilderInterface;
    public function setMethod(string $method): CashbackRequestBuilderInterface;
    public function setPath(string $path): CashbackRequestBuilderInterface;
    public function setHeaders(array $headers): CashbackRequestBuilderInterface;
    public function setJsonBody(array $jsonBody): CashbackRequestBuilderInterface;
    public function setAuth(array $auth): CashbackRequestBuilderInterface;
    public function setBody($body): CashbackRequestBuilderInterface;
    public function setCookie($cookie): CashbackRequestBuilderInterface;
    public function setTimeout(float $body): CashbackRequestBuilderInterface;

    public function sendRequest();
}
