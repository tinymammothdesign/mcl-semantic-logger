<?php

namespace SemanticLogger\Logger\LogEntriesLogger\LogEntriesDestination;

class Destination implements ILogEntriesDestination{

    private $token;

    public function __construct($token){
        $this->token = $token;
    }

    public function getToken(){
        return $this->token;
    }

} 