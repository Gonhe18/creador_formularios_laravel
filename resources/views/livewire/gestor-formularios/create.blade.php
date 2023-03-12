<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 my-2 shadow-zinc-500/50">
    <div class="w-full sm:px-6 flex ">
        <div class="overflow-hidden w-full sm:rounded-lg">
            <h2 class="text-3xl font-bold text-center font-serif mt-2">Crear Formulario</h2>
            <div class="w-full my-1">
                <form wire:submit.prevent="create(Object.fromEntries(new FormData($event.target)))" method="post" id="formSeguimiento" class="w-full">
                    @csrf
                    @include('livewire.gestor-formularios.formulario')
                </form>
            </div>
        </div>
    </div>
</div>