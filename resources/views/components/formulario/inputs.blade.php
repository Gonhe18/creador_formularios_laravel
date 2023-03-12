<div class="flex flex-col justify-center">
    <label for="{{$name}}" class="font-sans font-bold text-lg py-1.5">{{$label}}</label>
    @if($placeholder != null)
    <input id='{{$name}}' type="{{$type}}" name="{{$name}}" value="{{old($name)?old($name):$value}}" placeholder="{{$placeholder}}" data-validacion={{json_encode($validacion)}} autocomplete="off" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none  @error($name) border-red-600 @enderror">
    @else
    <input id='{{$name}}' type="{{$type}}" name="{{$name}}" value="{{old($name)?old($name):$value}}" autocomplete="off" data-validacion={{json_encode($validacion)}} class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none e @error($name) border-red-600 @enderror">
    @endif
</div>
