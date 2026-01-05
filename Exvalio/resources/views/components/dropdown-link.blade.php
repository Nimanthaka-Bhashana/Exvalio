<a {{ $attributes->merge([
    'class' => 'block w-full px-4 py-2.5 text-start text-sm leading-5 text-slate-600 hover:bg-blue-50 hover:text-blue-700 focus:outline-none focus:bg-blue-50 focus:text-blue-700 transition duration-150 ease-in-out font-medium'
]) }}>
    {{ $slot }}
</a>