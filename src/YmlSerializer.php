<?php
namespace App;
use Symfony\Component\Yaml\Yaml;



class YmlSerializer{

    public function serialize($object){
        $parsed = Yaml::dump((array)$object);
        return $parsed;
    }

    public function unserialize($serialized_string){
        return Yaml::parse($serialized_string);
    }

}