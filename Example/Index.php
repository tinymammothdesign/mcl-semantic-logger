<?php

require_once "../vendor/autoload.php";
require_once "../SemanticLogger/LogEvent/AbstractLogEvent.php";

class UserRegisteredEvent extends \SemanticLogger\LogEvent\AbstractLogEvent{

    protected $eventPriority = self::LOG_DEBUG;

}

$event = new UserRegisteredEvent();
$logger = new \SemanticLogger\Logger\Logger("test.log");
$logger->persist($event);