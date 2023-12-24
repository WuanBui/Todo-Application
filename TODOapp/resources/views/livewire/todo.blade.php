<div>
    <div class="flex justify-center">
        <x-input-error :$messages="$errors->get('todo')" class="mt-2" />
    </div>

    <form class="flex" method="POST" wire:submit.prevent = "addTodo">
        <x-text-input wire:model='todo' class="w-full mr-2" />

        <x-primary-button> Add </x-primary-button>
    </form>

    <div class="flex mt-5 justify-center justify-between">
        <div>
            <input id="green-checkbox" type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100">
        </div>
        <div>
            TODO 1
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

    <div class="flex mt-5 justify-center justify-between">
        <div>
            <input id="green-checkbox" type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100">
        </div>
        <div>
            TODO 2
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




</div>