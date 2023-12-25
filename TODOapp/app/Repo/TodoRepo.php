<?php

namespace App\Repo;

class TodoRepo
{
    public $search=" ";

    public function save($data)
    {
        $createTodo = auth()->user()->todo()->create($data);
        if ($createTodo) {
            return $createTodo;
        }
    }
    public function getTodo($todoID)
    {
        return auth()->user()->todo()->find($todoID);
    }

    public function fetchAll()
    {
        $query = auth()->user()->todo()->latest();


        if ($this->search) {
            $query->where('todo', 'like', '%' . $this->search . '%');
        }

        $todo = $query->paginate(3);

        return $todo;
    }

    public function search($search)
    {
        $todos = auth()->user()->todo()
            ->where('todo', 'like', '%' . $search . '%')
            ->latest()
            ->paginate(3);

        return $todos;
    }

    public function update($todoID, $editedTodo)
    {
        $todo = $this->getTodo($todoID);
        return $todo->update(["todo" => $editedTodo]);
    }

    public function completed($todoID)
    {
        $todo = $this->getTodo($todoID);
        return ($todo->is_completed) ? $todo->update(['is_completed' => false]) : $todo->update(['is_completed' => true]);
    }

    public function delete($todoID)
    {
        return $this->getTodo($todoID)->delete();
    }
}
