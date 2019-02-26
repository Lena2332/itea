<?php
namespace App;

class Serializer{
    private $engine;
    private $serialized_string;
    private $obj;
    const YAML_EN = 'Yml';
    const XML_EN = 'Xml';
    const JSON_EN = 'json';

    public function __construct($engine)
    {
        if($engine == self::JSON_EN){
            $this->engine = new JsonSerializer();
        }
        if($engine == self::XML_EN) {
            $this->engine = new XmlSerializer();
        }
        if($engine == self::YAML_EN){
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