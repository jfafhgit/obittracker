<div class="relative z-0 w-full mb-10 group">
    <input
        type="text"
        name="{{ $fieldID }}"
        id="{{ $fieldID }}"
        autocomplete="please-dont"
        {{ $attributes->merge(['class' => 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer'])}}
        placeholder=" "
        {{ $required ? 'required' : '' }}
        />
    <label
        for="{{ $fieldID }}"
        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >
            {{ $label }}
        </label>
    {{-- <p class="mt-2 text-sm text-gray-500">{{ $instructions }}</p> --}}
</div>
