<div class="flex flex-col justify-center my-2 mx-4 md:mx-0" id="mainFormulario">
   <button type="submit" disabled class="none" aria-hidden="true"></button>
   <div hidden class="error bg-red-500 text-white font-bold text-sm p-2 text-center rounded-full"></div>

   @if($action == 1)
   @include('livewire.gestor-formularios.plantillaCreate')
   @endif






</div>