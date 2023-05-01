<?php

namespace Myolchauz\Mycashbackclient;

class HandlingResponse
{
    public function handleResponse($response) {
        $message = '';
        $success = true;
        $body = json_decode($response->getBody());
        if (($response->getStatusCode() == 200) && $body->result) {
            if ($body->result->original->result->success) {
                $message = $body->result->original->result->message;
            } else {
                $success = false;
                if ($body->result->original->error->code == 400) {
                    $message = $body->result->original->error->message;
                } elseif ($body->result->original->error->code == 422) {
                    $message = $body->result->original->validation_errors;
                }
            }
        } else {
            return [
                'success' => false,
                'exception' => $body->result ? $body->result->exception : null
            ];
        }

        return [
            'success' => $success,
            'message' => $message
        ];
    }
}
