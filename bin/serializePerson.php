#!/usr/bin/env php
<?php namespace App;
use App;
require_once __DIR__ . '/../vendor/autoload.php';

    $person = new Person('Lena', 'Kupriiets');

    //You can use json, Yml, Xml
    $serializer = new Serializer('Xml');

    $serializedPerson = $serializer->serialize($person);

    var_dump($serializedPerson);

    $unserialize_object = $serializer->unserialize($serializedPerson);

    var_dump($unserialize_object);

