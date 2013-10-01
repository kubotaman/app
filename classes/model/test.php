<?php

namespace Model;

class Test extends \Model {
    public static function get_results()
    {
        $results = \DB::query('SELECT * FROM bbs')->execute();
        return $results->as_array();
    }
    
    public static function insert_msg($insert)
    {
        $query = \DB::insert('users');
        $query->table('bbs');
        // 登録
        $query->set(array(
            'name' => 'John',
            'msg' => 'Doe',
            'uptime' => 'now()',
            'deleted' => '0'
        ));
        $query->execute();
        
   }
}
