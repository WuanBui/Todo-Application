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

    <div class="flex mt-5 justify-center justify-between">
        <div>
            <input id="green-checkbox" type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100">
        </div>
        <div>
            {{$todo -> todo}}
        </div>

        <div>
            <x-secondary-button>
                Edit
            </x-secondary-button>

            <x-danger-button>
                Delete
            </x-danger-button>
        </div>

    </div>

    @empty
    @endforelse


    <div class="mt-5">

    <div>


</div>