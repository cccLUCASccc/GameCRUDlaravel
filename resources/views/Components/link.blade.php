@props(['type' => 'link', 'href' => '#'])

@if ($type === 'submit')
    <button type="{{$type}}" class="p-[15px] bg-indigo-600 text-white font-semibold rounded-lg shadow-md 
               hover:bg-indigo-700 focus:outline-none focus:ring-2 
               focus:ring-indigo-500 focus:ring-opacity-50 transition">
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" class="p-[15px] text-sm font-semibold text-gray-900">
        {{ $slot }}
    </a>
@endif
