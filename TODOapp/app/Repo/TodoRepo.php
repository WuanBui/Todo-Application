<?php

namespace App\Repo;

class TodoRepo
{
    public function save($data){
        $createTodo= auth()->user()->todo()->create($data);
        if($createTodo){
            return $createTodo;
        }
    }

    public function fetchAll(){
        
    }
}
