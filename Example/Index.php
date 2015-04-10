<?php

require_once "../vendor/autoload.php";
require_once "../SemanticLogger/LogEvent/AbstractLogEvent.php";

class UserRegisteredEvent extends \SemanticLogger\LogEvent\AbstractLogEvent{

    protected $eventPriority = self::LOG_DEBUG;

}

class Destination implements SemanticLogger\Logger\LogEntriesLogger\LogEntriesDestination\ILogEntriesDestination{

    public function getToken(){
        return "3613bf6b-af23-418e-a1aa-0be56ffb1808";
    }
}
$event = new UserRegisteredEvent();
$logger = new \SemanticLogger\Logger\LogEntriesLogger\LogEntriesLogger(new Destination());
$logger->persist($event);