<div>
   <div class="grid grid-cols-3 gap-4 p-5 pb-0">
      <div class="flex flex-col">
         <label class="font-sans font-bold text-base py-1" for="modelForm">Proceso</label>

         <select wire:model="selectProceso" wire:change="cambioProceso($event.target.value)" type="text" id="proceso" name="proceso" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach($procesos as $key => $value)
            <option value="{{$key}}">{{ ucfirst(str_replace("_"," ",$value)) }}</option>
            @endforeach
         </select>
      </div>

      @if(!is_null($tipo_seg))
      <div class="flex flex-col">
         <label class="font-sans font-bold text-base py-1" for="modelo_id">Tipos</label>
         <select wire:model="selectTipoSeguimiento" wire:change="cambioTipoSeg($event.target.value)" name="modelo_id" id="modelo_id" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach($tipo_seg as $key => $value)
            <option value="{{$key}}">{{ $value }}</option>
            @endforeach
         </select>
      </div>
      @endif

      @if(!is_null($estadoSeg))
      <div class="flex flex-col">
         <label class="font-sans font-bold text-base py-1" for="modelo_id">Estado</label>
         <select wire:model="selectEstadoSeg" name="estadoSeg" id="estadoSeg" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach($estadoSeg as $key => $value)
            <option value="{{$key}}">{{ $value }}</option>
            @endforeach
         </select>
      </div>
      @endif

   </div>

   @include("livewire.gestor-formularios.crearCampoForm")

   <input type="hidden" name="tipo" id="tipo">
   <input type="hidden" name="entidad" id="entidad">
   <input type="hidden" name="propiedades" id="propiedades">

   <hr>

   <div class="w-full py-2 bg-cyan-100 font-bold text-black leading-tight rounded-full shadow-md flex justify-evenly">
      <span class="mx-2 text-sm">Recuerda agregar el campo antes de guardar el formulario</span>
      <span class="mx-2 text-right text-sm" id='totalCampos'>Campos agregados: 0</span>

   </div>

   <div class="flex justify-around  p-5">
      <div class="m-4">
         <button id="btnAdd" type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out text-lg">
            Agregar campo
         </button>
      </div>
      <div class="m-4">
         <button id="btnSave" type="submit" class="hidden">
            Guardar formulario
         </button>
      </div>
   </div>
</div>