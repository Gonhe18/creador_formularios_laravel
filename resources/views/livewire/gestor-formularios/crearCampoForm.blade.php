<div class="flex flex-col">
   <div class="grid grid-cols-2 gap-4 p-5 pb-0">
      <div class="flex flex-col">
         <label class="font-sans font-bold text-base py-1" for="categoria">Categoría input</label>
         <select wire:model="selectCatInput" wire:change="cambioCatInput($event.target.value)" name="categoria" id="categoria" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach($catInput as $value)
            <option value="{{$value}}">{{ ucfirst($value) }}</option>
            @endforeach
         </select>
      </div>

      @if(count($tipoInput))
      <div class="flex flex-col">
         <label class="font-sans font-bold text-base py-1" for="type">Tipo input</label>
         <select wire:model="selectTypeInput" wire:change="cambioTypeInput($event.target.value)" name="type" id="inputTypeSelect" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Seleccione una opción</option>
            @foreach($tipoInput as $value)
            <option value="{{$value}}">{{ ucfirst($value) }}</option>
            @endforeach
         </select>
      </div>
      @endif
   </div>

   <div id="contenedorInput">

      @if($categoriaInput == 'input')

      @if($typeInput == 'date')
      <x-form-input-date></x-form-input-date>
      @livewire('component.select-multiple',[
      'campos' => '[3]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($typeInput == 'checkbox' || $typeInput == 'radio')
      <x-form-input-check-radio></x-form-input-check-radio>
      @livewire('component.select-multiple',[
      'campos' => '[4,5]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($typeInput == 'file')
      <x-form-input-file></x-form-input-file>
      @livewire('component.select-multiple',[
      'campos' => '[6]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($typeInput == 'range')
      <x-form-input-range></x-form-input-range>
      @livewire('component.select-multiple',[
      'campos' => '[9]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($typeInput == 'text' || $typeInput == 'number' || $typeInput == 'password')
      <x-form-input-text></x-form-input-text>
      @livewire('component.select-multiple',[
      'campos' => '[1,2,8]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($typeInput == 'email')
      <x-form-input-email></x-form-input-email>
      @livewire('component.select-multiple',[
      'campos' => '[7]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @endif

      @if($categoriaInput == 'select')
      <x-form-select></x-form-select>
      @livewire('component.select-multiple',[
      'campos' => '[11]',
      'label'=> 'Reglas de validación',
      'name' => 'reglas_validacion',
      'wireModel' => 'seleccionador',
      'validacionSelect' => '[]',
      'nameHidden' => 'r_validacion',
      'validacionHidden' => '["required"]',
      ])
      @endif

      @if($categoriaInput == 'textarea')
      <div id="createCampo">
         <x-form-text-area></x-form-text-area>
         @livewire('component.select-multiple',[
         'campos' => '[10]',
         'label'=> 'Reglas de validación',
         'name' => 'reglas_validacion',
         'wireModel' => 'seleccionador',
         'validacionSelect' => '[]',
         'nameHidden' => 'r_validacion',
         'validacionHidden' => '["required"]',
         ])
      </div>
      @endif


      <div class="grid grid-cols-2 gap-4 p-5 pb-0 mb-6">
         @if($inputMin)
         <x-formulario.inputs type="number" name="min" placeholder="Ingrese el valor mínimo" value="" label="Mínimo" validacion="">
         </x-formulario.inputs>
         @endif

         @if($inputMax)
         <x-formulario.inputs type="number" name="max" placeholder="Ingrese el valor máximo" value="" label="Máximo" validacion="">
         </x-formulario.inputs>
         @endif

      </div>
   </div>

   <input type="hidden" id="camposId">
</div>