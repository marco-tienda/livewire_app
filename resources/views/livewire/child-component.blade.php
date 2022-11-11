<div class="bg-white p-3 m-3 rounded-md md:w-5/12">
    <h1 class="text-center font-medium text-xl mt-3">
        Este es el Componente hijo
    </h1>

    <p class="text-center font-medium text-gray-700">
        {{ $employee->name }} {{ now() }}
    </p>

    <div class="flex justify-center mt-3">
        <button
            class="bg-violet-500 p-2 shadow-md shadow-violet-300 font-medium rounded-md text-white hover:bg-violet-700 transition-colors"
            wire:click="$refresh"
        >
            Refresh
        </button>
    </div>
</div>
