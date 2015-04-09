<?php

require_once "../vendor/autoload.php";
require_once "../SemanticLogger/LogEvent/AbstractLogEvent.php";

class UserRegisteredEvent extends \SemanticLogger\LogEvent\AbstractLogEvent{

    protected $eventPriority = self::LOG_DEBUG;

}

$event = new UserRegisteredEvent();
$logger = new \SemanticLogger\Logger\LogEntriesLogger\LogEntriesLogger("Test Log", "c0acd2c6-4037-4cd0-b52a-3ecedfb933ec");
$logger->persist($event);