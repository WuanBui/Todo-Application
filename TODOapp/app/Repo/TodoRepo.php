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
    public function getTodo($todoID){
        return auth()->user()->todo()->find($todoID);
    }

    public function fetchAll(){
        $todos = auth() -> user()->todo()->latest()->paginate(3);
        return $todos;
    }

    public function update($todoID, $editedTodo){
        $todo = $this->getTodo($todoID);
        return $todo -> update(["todo" => $editedTodo]);
    }
}
