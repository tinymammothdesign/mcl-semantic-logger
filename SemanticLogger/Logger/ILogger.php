<?php

namespace SemanticLogger\Logger;

use SemanticLogger\LogEvent\AbstractLogEvent;

interface ILogger{

    public function persist(AbstractLogEvent $logEvent);

}