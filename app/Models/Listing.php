<?php
    namespace App\Models;
    
    class Listing{
        public static function getList(){
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'Description' => 'asdasdasdasd'
                ],            
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'Description' => 'qweqweqweqwe'
                ],
            ];
        }

        public static function find($id){
            $listings = self::getList();
            
            foreach($listings as $item){
                if($item['id'] == $id){
                    return $item;
                }
            }
        }
    }

    
