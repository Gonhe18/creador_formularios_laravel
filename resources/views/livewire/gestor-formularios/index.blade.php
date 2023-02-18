<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-2xl font-serif text-gray-800">
                Gestor Formularios
            </h2>
        </div>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mb-2 mx-auto py-4 px-4 sm:px-2 lg:px-8 bg-white shadow flex flex-col h-96">


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 my-2  shadow-zinc-500/50 flex justify-around content-center h-full {{$visible}} h-96">
                <div class="grid content-center">
                    <a href="javascript:void(0)" wire:click="action(1)">
                        <x-buttonComponent value="Nuevo Formulario" color="blue" name="crear"></x-buttonComponent>
                    </a>
                </div>
                <div class="grid content-center">
                    <a href="javascript:void(0)" wire:click="action(2)">
                        <x-buttonComponent value="Editar Formulario" color="green" name="editar"></x-buttonComponent>
                    </a>
                </div>
                <div class="grid content-center">
                    <a href="javascript:void(0)" wire:click="action(3)">
                        <x-buttonComponent value="Eliminar Formulario" color="red" name="delete"></x-buttonComponent>
                    </a>
                </div>
            </div>

            <!-- 
            @if($action == 1)
            @livewire("gestor-form.create")
            @endif

            @if($action == 2)
            @livewire('gestor-form.edit')
            @endif

            @if($action == 3)
            @livewire('gestor-form.delete')
            @endif -->

        </div>
    </div>
    @include("livewire.gestor-formularios.validacionesJS")
</div>