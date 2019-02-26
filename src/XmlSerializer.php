<?php namespace App;


class XmlSerializer {
    private $xml_obj;
    private $prop_name;

    public function __construct(){
        $this->xml_obj = new \SimpleXMLElement('<root/>');
    }

    public function serialize($object){
        $array_obj = (array)$object;
        foreach ($array_obj as $key => $value) {
            $key_arr = \explode('\\',$key);

            //WHy this variable $nod not attach to function addChild?
            //$nod = \str_replace("Person", "", $key_arr[1]);

            $nod = "atribute";
            $this->xml_obj->addChild($nod, \htmlentities($value));
        }
        return $this->xml_obj->asXML();
    }

    public function unserialize($serialized_string){
        $xml = simplexml_load_string($serialized_string, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $array;
    }
}