<div class="flex flex-col justify-center">
    <label for="{{$name}}" class="font-sans font-bold text-lg py-1.5">{{$label}}</label>
    @if($placeholder != null)
    <textarea id="{{$name}}" value="{{old($name)?old($name):$value}}" name="{{$name}}" placeholder="{{isset($placeholder)?$placeholder:""}}" rows="5" autocomplete="off" class="@error($name) border-red-600 @enderror form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " data-validacion={{json_encode($validacion)}}>{{old($name)?old($name):$value}}</textarea>
    @else
    <textarea id="{{$name}}" value="{{old($name)?old($name):$value}}" name="{{$name}}" rows="5" autocomplete="off" class="@error($name) border-red-600 @enderror form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " data-validacion={{json_encode($validacion)}}>{{old($name)?old($name):$value}}</textarea>
    @endif
</div>
