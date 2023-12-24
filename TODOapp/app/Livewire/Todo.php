<?php

namespace App\Livewire;

use App\Repo\TodoRepo;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Todo extends Component
{

    use WithPagination;
    protected $repo;

    #[Rule("required|min:3")]

    public $todo = "";
    #[Rule("required|min:3")]

    public $editedTodo;

    public $edit;
    public function boot(TodoRepo $repo)
    {
        $this->repo = $repo;
    }

    public function addTodo()
    {
        $validated = $this->validateOnly('todo');
        $this->repo->save($validated);
        $this->todo = " ";
    }

    public function editTodo($todoID){
        $this->edit = $todoID;
        $this->editedTodo = $this->repo->getTodo($todoID)->todo;
    }

    public function updateTodo($todoID){
        $validated = $this -> validateOnly('editedTodo');
        $this -> repo -> update ($todoID, $validated["editedTodo"]);
        $this->cancelEdit();
    }

    public function cancelEdit(){
        $this -> edit = "";
    }
    public function render()
    {
        $todos = $this -> repo ->fetchAll();
        return view('livewire.todo', compact('todos'));
    }
}
