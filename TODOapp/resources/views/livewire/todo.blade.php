<div>
    <form class="flex mb-3" method="POST" wire:submit.prevent='addTodo'> 
        <x-text-input wire:model='search' placeholder='Search' class="w-full mr-2"/>
    </form>
<br>
    <form class="flex mb-3" method="POST" wire:submit.prevent='addTodo'> 
        <x-text-input wire:model='todo' class="w-full mr-2"/>
        
        <select wire:model="category_id" class="dark:bg-gray-800 dark:border-gray-700 dark:text-black light:bg-gray-200 light:border-gray-300 light:text-black">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <x-primary-button>
            Add
        </x-primary-button>
    </form>

    @forelse ($todos as $todo)
        <div class="flex mt-5 py-4 items-center justify-between">
            <div class="flex items-center w-full ">
                <input id="green-checkbox" wire:click='markCompleted({{ $todo->id }})' @if($todo->is_completed) checked @endif type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100 rounded focus:ring-green-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <div class="ml-4 w-full " style="text-align: center">
                    @if ($edit == $todo->id)
                        <x-text-input wire:model='editedTodo' class="w-full mr-2"/>
                    @else
                        <span @if ($todo->is_completed) @class('text-green-600 line-through text-opacity-50') @endif>{{ $todo->todo }}</span>
                        <br>
                        <span @if ($todo->is_completed) @class('text-green-600 line-through text-opacity-50') @endif >Category: {{ $todo->category ? $todo->category->name : $category -> name }} </span>
                    @endif
                </div>
            </div>
            <div class="flex space-x-2">
                @if ($edit == $todo->id)
                    <x-secondary-button wire:click='updateTodo({{ $todo->id }})'>Update</x-secondary-button>
                    <x-danger-button wire:click='cancelEdit'>Cancel</x-danger-button>
                @else
                    <x-secondary-button wire:click='editTodo({{ $todo->id }})'>Edit</x-secondary-button>
                    <x-danger-button wire:click='deleteTodo({{ $todo->id }})'>Delete</x-danger-button>
                @endif
            </div>
        </div>
    @empty  
    @endforelse

    <div class="mt-5">
        {{ $todos->links() }}
    </div>
</div>