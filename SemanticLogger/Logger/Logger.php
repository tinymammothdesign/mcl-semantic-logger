<?php

namespace SemanticLogger\Logger;

use SemanticLogger\LogEvent\AbstractLogEvent;

class Logger{

    private $filePath;

    public function __construct($filePath){
        $this->filePath = $filePath;
    }

    public function persist(AbstractLogEvent $logEvent){
        $json = json_encode($logEvent->serialize());
        file_put_contents($this->filePath, $json, FILE_APPEND);
    }
}