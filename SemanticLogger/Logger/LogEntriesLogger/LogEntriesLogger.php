<?php

namespace SemanticLogger\Logger\LogEntriesLogger;

use Monolog\Handler\LogEntriesHandler;
use Monolog\Logger;
use SemanticLogger\LogEvent\AbstractLogEvent;
use SemanticLogger\Logger\ILogger;
use SemanticLogger\Logger\LogEntriesLogger\Formatters\JSONDumpFormatter;
use SemanticLogger\Logger\LogEntriesLogger\LogEntriesDestination\ILogEntriesDestination;

class LogEntriesLogger implements ILogger{

    /**
     * @var \Monolog\Logger
     */
    private $log;

    /**
     * @param ILogEntriesDestination $destination
     */
    public function __construct(ILogEntriesDestination $destination){
        $handler = new LogEntriesHandler($destination->getToken());
        $handler->setFormatter(new JSONDumpFormatter());

        $this->log = new Logger("");
        $this->log->pushHandler($handler);
    }

    /**
     * @param AbstractLogEvent $logEvent
     */
    public function persist(AbstractLogEvent $logEvent){
        $this->log->addDebug("", $logEvent->serialize());
    }

} 