<div class="grid grid-cols-2 gap-4 p-5 pb-0" id="bloqueInputs">
    <div class="flex flex-col">
        <label class="font-sans font-bold text-base py-1" for="">Name</label>
        <input value="{{old('name') ? old('name') : ''}}" type="text" name="name" id="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    </div>
    <div class="flex flex-col">
        <label class="font-sans font-bold text-base py-1" for="">Label</label>
        <input value="{{old('label') ? old('label') : ''}}" type="text" name="label" id="label" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    </div>
    <div class="flex flex-col">
        <label class="font-sans font-bold text-base py-1" for="value">Valor mínimo</label>
        <input value="{{old('min') ? old('min') : ''}}" type="number" name="min" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    </div>
    <div class="flex flex-col">
        <label class="font-sans font-bold text-base py-1" for="value">Valor máximo</label>
        <input value="{{old('max') ? old('max') : ''}}" type="number" name="max" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    </div>
</div>