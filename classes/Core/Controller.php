<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 19/12/2016
 * Time: 19:18
 */

namespace App\Core;


class Controller
{
    private $data = [];

    function index()
    {
        $arr = [
            'key1' => 'val1',
            'key2' => 'val2',
            'key3' => 'val3',
        ];
        
        $keys = [
            'key1', 'key2', 'key3'
        ];
        $vals = [
            'val1', 'val2', 'val3'
        ];
        
    }

    protected function set($name, $value) {
        $this->data[$name] = $value;
    }

    public function getData() {
        return $this->data;
    }

}