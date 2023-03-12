<div class="flex flex-col w-full">
    <div class="flex flex-wrap w-full px-2">
        <div class="w-10/12">
            <label for="{{$name}}" class="font-sans font-bold text-base py-1.5">{{$label}}</label>
            <select id="{{$name}}" name="{{$name}}" wire:model={{$wireModel}} class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none mt-2" data-validacion={{$validacionSelect}}>
                <option value="">Elija una opción</option>
                @foreach ($selectPrincipal as $key => $value)
                <option value="{{$key}}">
                    {{ $value }}
                </option>
                @endforeach
            </select>

            <div wire:ignore>
                <input type="hidden" name={{$nameHidden}} id={{$nameHidden}} data-validacion={{$validacionHidden}}>
            </div>
            @error("{{$nameHidden}}")
            <div class="text-base font-bold text-red-500 w-full">{{$message}}</div>
            @enderror
            <span class="hidden" id="error_{{$nameHidden}}"></span>

        </div>

        <div class="mt-5 pt-4 ml-2">
            <button type='button' title="Agregar" wire:click="agregar" onclick="agregar('{{$name}}', '{{$nameHidden}}')">
                <i class="fa-solid fa-circle-plus fa-xl text-blue-500"></i>
            </button>
            <button type='button' title="Limpiar selección" wire:click="eliminarTodos" onclick="eliminarTodos('{{$nameHidden}}')">
                <i class="fa-solid fa-circle-minus fa-xl text-red-500"></i>
            </button>
            <button type='button' title="Agregar todo" wire:click="agregarTodos" onclick="agregarTodos('{{$name}}', '{{$nameHidden}}')">
                <i class="fa-solid fa-square-plus fa-xl text-green-500"></i>
            </button>
        </div>

        <div class="w-full my-3 flex flex-wrap">
            @foreach($seleccionados as $key => $value)
            <div class="mx-2 mb-2">
                <button class="actualizar" value={{$key}} type='button' wire:click="eliminar({{$key}})" onclick="eliminar('{{$key}}', '{{$nameHidden}}')"><i class="fa-sharp fa-solid fa-circle-xmark text-red-500 fa-lg"></i></button>
                <span class="font-bold text-base">{{$value}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>