<?php namespace App;

class JsonSerializer{

   public function serialize($object){
       return json_encode((array)$object, JSON_UNESCAPED_UNICODE);
   }

   public function unserialize($serialized_string){
       return json_decode($serialized_string, true);
   }
}
