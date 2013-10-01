<?php

namespace Model;

class Test extends \Model {
    public static function get_results()
    {
        $results = \DB::query('SELECT * FROM bbs')->execute();
        return $results->as_array();
    }
}
