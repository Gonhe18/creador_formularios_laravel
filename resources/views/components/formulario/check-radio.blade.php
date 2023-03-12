<div class="flex flex-col justify-center">
    <span class="font-sans font-bold text-lg">{{$label}}</span>
    <div class="flex py-2">
        @foreach ($option as $op)
        <div class="flex flex-row mx-2">
            <label for="{{$name}}" class="mr-1.5 font-sans font-bold text-base py-1.5">{{$op}}</label>
            <input id="{{$name}}" data-validacion={{json_encode($validacion)}} type="{{$type}}" name="{{$name}}" class="mx-2 my-2.5 @error($name) border-red-600 @enderror" value="{{$op == 'Si' ? 1 : 0}}" {{($value == 1 ? "Si" : "No") == $op ? 'checked' : '' }}>
        </div>
        @endforeach
    </div>
</div>
