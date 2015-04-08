<?php

namespace SemanticLogger\LogEvent\SlimResponseLogEvent;

use SemanticLogger\LogEvent\AbstractLogEvent;
use Slim\Http\Response;

abstract class SlimResponseLogEvent extends AbstractLogEvent{

    /**
     * @log
     */
    protected $cookies;

    /**
     * @log
     */
    protected $headers;

    /**
     * @log
     */
    protected $body;

    /**
     * @log
     */
    protected $status;


    public function slimResponse(Response $response){
        $this->body = $response->getBody();
        $this->status = $response->getStatus();
        $this->cookies = $response->cookies;
        $this->headers = $response->headers;
    }

}