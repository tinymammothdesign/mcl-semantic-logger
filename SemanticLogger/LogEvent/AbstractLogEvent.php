<?php

namespace SemanticLogger\LogEvent;

use zpt\anno\Annotations;

class AbstractLogEvent{

    const LOG_FAIL = "failure";
    const LOG_WARN = "warn";
    const LOG_DEBUG = "debug";

    /**
     * @log
     */
    protected $eventTimestamp;

    /**
     * @log
     */
    protected $eventDate;

    /**
     * @log
     */
    protected $eventTime;

    /**
     * @log
     */
    protected $eventClass;

    /**
     * @log
     */
    protected $eventPriority;

    public function prepareDefaultFields(){
        if (!isset($this->eventPriority)){
            throw new EPriorityNotSet();
        }

        $this->eventTimestamp = (new \DateTime())->getTimestamp();
        $this->eventDate = (new \DateTime())->format("Y-m-d");
        $this->eventTime = (new \DateTime())->format("H:i:s");
        $this->eventClass = get_class($this);
    }

    public function serialize(){
        $this->prepareDefaultFields();

        $classReflector = new \ReflectionClass($this);
        $serialized = array();
        foreach ($classReflector->getProperties() as $propertyReflector) {
            $annotations = new Annotations($propertyReflector);
            if (isset($annotations["log"])){

                $propName = $propertyReflector->getName();
                if (isset($annotations["log"]["key"])){
                    $keyName = $annotations["log"]["key"];
                }else{
                    $keyName = $propertyReflector->getName();
                }
                $serialized[$keyName] = $this->$propName;
            }
        }

        return $serialized;
    }
}