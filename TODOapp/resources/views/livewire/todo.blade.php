<div>
    <div class="flex justify-center">
        <x-input-error :$messages="$errors->get('todo')" class="mt-2" />
    </div>

    <form class="flex" method="POST" wire:submit.prevent="addTodo">
        <x-text-input wire:model='todo' class="w-full mr-2" />

        <x-primary-button> Add </x-primary-button>
    </form>
    <br>
    @forelse($todos as $todo)

    <div class="flex mt-5 py-4 justify-center justify-between">
        <div>
            <input id="green-checkbox" type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100">
        </div>
        <div>
            @if($edit == $todo -> id)
            <x-text-input wire:model="editedTodo" class="w-full mr-2" />
            @else
            {{$todo->todo}}
            @endif

        </div>

        <div>
            @if($edit == $todo -> id)
            <x-secondary-button wire:click="updateTodo({{$todo->id}})">
                Update
            </x-secondary-button>

            <x-danger-button wire:click="cancelEdit">
                Cancel
            </x-danger-button>
            @else
            <x-secondary-button wire:click="editTodo({{ $todo->id }})">
                Edit
            </x-secondary-button>

            <x-danger-button>
                Delete
            </x-danger-button>
            @endif
        </div>

    </div>

    @empty
    @endforelse


    <div class="mt-5">
        {{$todos -> links()}}
    </div>


</div>