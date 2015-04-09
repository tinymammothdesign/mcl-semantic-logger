<?php

namespace SemanticLogger\Logger\LogEntriesLogger;

use Monolog\Handler\LogEntriesHandler;
use Monolog\Logger;
use SemanticLogger\LogEvent\AbstractLogEvent;
use SemanticLogger\Logger\Formatters\JSONDumpFormatter;
use SemanticLogger\Logger\ILogger;

class LogEntriesLogger implements ILogger{

    /**
     * @var \Monolog\Logger
     */
    private $log;

    public function __construct($logEntriesToken){
        $handler = new LogEntriesHandler($logEntriesToken);
        $handler->setFormatter(new JSONDumpFormatter());

        $this->log = new Logger("");
        $this->log->pushHandler($handler);
    }

    public function persist(AbstractLogEvent $logEvent){
        $this->log->addDebug("", $logEvent->serialize());
    }

} 