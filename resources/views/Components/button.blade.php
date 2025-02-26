<button {{ $attributes->merge(['class' => 'm-[20px] bg-gray-600 rounded-3xl text-white p-[20px]']) }} type="submit" form="{{ $attributes->get('form') }}">
    {{ $slot }}
</button>
