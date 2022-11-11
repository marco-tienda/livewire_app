<div>
    <h1 class="text-center font-medium text-2xl">
        Componente padre
    </h1>

    <div class="flex justify-center">
        <hr class="m-5 border-gray-600 w-8/12">
    </div>

    {{-- Primera forma de pasar variables de un componente padre a un hijo --}}
    {{-- @livewire('child-component', ['name' => $name]) --}}

    {{-- Segunda forma de pasar variables de un componente padre a un hijo --}}
    <div class="md:flex flex-col justify-center items-center">
        @foreach ($employees as $employee)
            <livewire:child-component
                :employee="$employee"
                :key="$employee->id"
            />
            {{-- @livewire('child-component', ['employee' => $employee], key($employee->id)) --}}
        @endforeach
    </div>

</div>
