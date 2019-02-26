<?php namespace App;

class Serializer{
    private $engine;
    private $serialized_string;
    private $obj;

    public function __construct($engine)
    {
        if($engine == "json"){
            $this->engine = new JsonSerializer();
        }
        if($engine == "Xml") {
            $this->engine = new XmlSerializer();
        }
        if($engine == "Yml"){
            $this->engine = new YmlSerializer();
        }
    }



    public function serialize($object){
         $this->serialized_string = $this->engine->serialize($object);
         return $this->serialized_string;
    }

    public function unserialize($serialize_string){
        if($serialize_string) {
            $this->obj = $this->engine->unserialize($serialize_string);
            return $this->obj;
        }
        return false;
    }


}