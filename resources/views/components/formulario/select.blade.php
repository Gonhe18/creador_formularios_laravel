<div class="flex flex-col justify-center">
    <label for="{{$name}}" class="font-sans font-bold text-base py-1.5">{{$label}}</label>
    <select name="{{$name}}" id='{{$name}}' class="@error($name) border-red-600 @enderror form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " data-validacion={{json_encode($validacion)}}>
        <option value="">Elija una opción</option>
        @foreach ($option as $op)
        <option value="{{$op}}">{{$op}}</option>
        @endforeach
    </select>
</div>
