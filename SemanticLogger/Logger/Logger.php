<?php

namespace SemanticLogger\Logger;

use Monolog\Handler\StreamHandler;
use SemanticLogger\LogEvent\AbstractLogEvent;

class Logger{

    /**
     * @var \Monolog\Logger
     */
    private $log;

    private $filePath;

    public function __construct($filePath){
        $this->filePath = $filePath;

        $this->log = new \Monolog\Logger("Monolog");
        $this->log->pushHandler(new StreamHandler($filePath, \Monolog\Logger::DEBUG));
    }

    public function persist(AbstractLogEvent $logEvent){
        $json = json_encode($logEvent->serialize());
        $this->log->log(\Monolog\Logger::DEBUG, $json);
    }
}