<div class="w-full p-3">
    <div class="flex flex-row w-full px-2">
        <div class="w-11/12">
            <label for="{{$name}}" class="font-sans font-bold text-base py-1.5">{{$label}}</label>
            @if(count($selectPrincipal) > 0)
            <select id="{{$name}}" name="{{$name}}" wire:model={{$wireModel}} class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none mt-2" data-validacion={{$validacionSelect}}>
                <option value="">Elija una opción</option>
                @foreach ($selectPrincipal as $key => $value)
                <option value="{{$key}}">
                    {{ $value }}
                </option>
                @endforeach
            </select>
            @else
            <select id="{{$name}}" name="{{$name}}" wire:model={{$wireModel}} class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 mt-2" data-validacion={{$validacionSelect}} disabled>
                <option value="">Todas las opciones seleccionadas</option>
            </select>
            @endif

            <div wire:ignore>
                <input type="hidden" name={{$nameHidden}} id={{$nameHidden}} data-validacion={{$validacionHidden}}>
            </div>
            @error("{{$nameHidden}}")
            <div class="text-base font-bold text-red-500 w-full">{{$message}}</div>
            @enderror
            <span class="hidden" id="error_{{$nameHidden}}"></span>

        </div>

        <div class="flex justify-around items-end mx-2">
            <button type='button' title="Agregar" wire:click="agregar" onclick="agregar('{{$name}}', '{{$nameHidden}}')">
                <box-icon type='solid' name='plus-circle' color='blue'></box-icon>
            </button>
            <button type='button' title="Limpiar selección" wire:click="eliminarTodos" onclick="eliminarTodos('{{$nameHidden}}')">
                <box-icon type='solid' name='x-circle' color=red></box-icon>
            </button>
            <button type='button' title="Agregar todo" wire:click="agregarTodos" onclick="agregarTodos('{{$name}}', '{{$nameHidden}}')">
                <box-icon type='solid' name='layer-plus' color=green></box-icon>
            </button>
        </div>
    </div>

    <div class="w-full flex flex-row">
        @foreach($seleccionados as $key => $value)
        <div class="mx-2 mb-2 flex items-center" id='{{$key}}'>
            <button class="actualizar pt-2" value="{{$key}}" type='button' wire:click="eliminar('{{$key}}')" onclick="eliminar('{{$key}}', '{{$nameHidden}}')"><box-icon name='x' color=red></box-icon></button>
            <span class="font-bold text-base">{{$value}}</span>
        </div>
        @endforeach
    </div>
</div>