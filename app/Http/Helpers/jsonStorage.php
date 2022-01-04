<?php

namespace App\Http\Helpers;

class jsonStorage
{
//        $jsonStorage=new jsonStorage();
//        $jsonStorage->from("categories_tags")->where('a')->delete();
//        $jsonStorage->from("categories_tags")->where('a')->update(["سشسسشسسش"]);
//        dd($jsonStorage->from("categories_tags")->all());
    private function getProperty($object, $properties = [], $null = true)
    {
        if (gettype($properties) == "string") {
            $properties = [$properties];
        }
        try {
            $out = $object;
            foreach ($properties as $property) {
                if (gettype($out) == "object") {
                    $out = $out->$property;
                } else {
                    $out = $out[$property];
                }
            }
            return $out;
        } catch (\Exception $e) {
            if ($null == true) {
                return null;
            } else {
                return "";
            }
        }
    }
    private function propertyExist($object, $properties = [])
    {
        if (gettype($properties) == "string") {
            $properties = [$properties];
        }
        try {
            $out = $object;
            foreach ($properties as $property) {
                if (gettype($out) == "object") {
                    $out = $out->$property;
                } else {
                    $key=array_search($property,$out);
                    if($key!==false){
                        $out = $out[$key];
                    }else{
                        return false;
                    }
                }
            }
            return true;
        } catch (\Exception $e) {
          return false;
        }
    }

    private function appendArray($object, $properties, $values)
    {
        $temp = &$object;
        foreach ($properties as $property) {
            $temp =& $temp->$property;
        }
        $temp=(array)$temp;
        if(gettype($values)=='string'){
            $values=[$values];
        }
        foreach ($values as $value){
            array_push( $temp,$value);
        }
        return json_decode(json_encode($object));
    }


    private function updateObject($object, $properties, $values)
    {
        $temp = &$object;
        foreach ($properties as $property) {
            $temp =& $temp->$property;
        }
        if ($values != null) {
            try {
                foreach ($values as $key => $value) {
                    $temp->$key = $value;
                }
            } catch (\Exception $e) {
                array_merge((array)$temp, $values);
            }
        } else {
            $temp = (object)[];
        }
        return json_decode(json_encode($object));
    }

    private function deleteIndexArray($object, $properties, $index)
    {
        $temp = &$object;
        foreach ($properties as $property) {
            $temp =& $temp->$property;
        }
        $this->deleteItemFromArray($temp,$index);
        return json_decode(json_encode($object));
    }

    private function deleteItemFromArray(&$array,$index){
        $out=[];
        foreach ($array as $key => $value){
            if($key!=$index){
                array_push($out,$value);
            }
        }
        $array=$out;
    }



    /////////////
    private $storagePath;
    private $properties=[];
     // select json file
    public function from($storageName)
    {
        $this->storagePath = storage_path() . "/jsonStorage/" . $storageName . ".json";
        if (file_exists($this->storagePath) != true) {
            fwrite(fopen($this->storagePath, "w"), '{}');
        }
        return $this;
    }
    // mapping json and path
    public function where($properties = [])
    {
        if (gettype($properties) == 'string') {
            $properties = [$properties];
        }
        $this->properties = $properties;
        return $this;
    }
    // get all keys and values without where
    public function all()
    {
        return json_decode(file_get_contents($this->storagePath));
    }

    // get values from path in where
    public function get()
    {
        $json = json_decode(file_get_contents($this->storagePath));
        return $this->getProperty($json, $this->properties);
    }
    // append item to array
    public function append($values)
    {
        $json = json_decode(file_get_contents($this->storagePath));
        $properties = $this->properties;
        $json = $this->appendArray($json, $properties, $values);
        file_put_contents($this->storagePath, json_encode($json,JSON_UNESCAPED_UNICODE));
    }
    // key update values
    public function update($values)
    {
        $json = json_decode(file_get_contents($this->storagePath));
        $properties = $this->properties;
        $json = $this->updateObject($json, $properties, $values);
        file_put_contents($this->storagePath, json_encode($json,JSON_UNESCAPED_UNICODE));
    }
    // key delete  values
    public function delete()
    {
        $json = json_decode(file_get_contents($this->storagePath));
        $properties = $this->properties;
        $json = $this->updateObject($json, $properties, null);
        file_put_contents($this->storagePath, json_encode($json,JSON_UNESCAPED_UNICODE));
    }
    // delete item from array
    public function deleteIndex($index)
    {
        $json = json_decode(file_get_contents($this->storagePath));
        $properties = $this->properties;
        $json = $this->deleteIndexArray($json, $properties, $index);
        file_put_contents($this->storagePath, json_encode($json,JSON_UNESCAPED_UNICODE));
    }
    // exist path
    public function exist()
    {
        $json = json_decode(file_get_contents($this->storagePath));
        $properties = $this->properties;
        return $this->propertyExist($json,$properties);
    }

}

