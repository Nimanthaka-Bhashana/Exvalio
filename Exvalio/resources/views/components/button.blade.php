@props(['variant' => 'primary', 'type' => 'submit'])

@php
    switch ($variant) {
        case 'danger':
            $classes = 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
            break;
        case 'ghost':
            $classes = 'w-full py-3 rounded-2xl bg-white border border-gray-300 text-gray-800 font-medium hover:bg-gray-50 transition';
            break;
        case 'primary':
        default:
            $classes = 'w-full py-3 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold text-lg shadow-lg hover:scale-[1.02] transition';
            break;
    }
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>
