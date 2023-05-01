<?php

namespace Myolchauz\Mycashbackclient\Repositories\Interfaces;

interface CashbackRequestBuilderInterface
{
    public function setBaseUri(string $baseUri);
    public function setMethod(string $method);
    public function setPath(string $path);
    public function setHeaders(array $headers);
    public function setJsonBody(array $jsonBody);
    public function setAuth(array $auth);
    public function setBody($body);
    public function setCookie($cookie);
    public function setTimeout(float $body);

    public function sendRequest(int $user_id, int $cashback_action_id, array $attributes);
}