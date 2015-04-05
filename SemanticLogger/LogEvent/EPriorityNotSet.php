<?php

namespace SemanticLogger\LogEvent;

class EPriorityNotSet extends \Exception{

    public function __construct(){
        return parent::__construct("Priority on event instance not set, cannot serialize.");
    }
}