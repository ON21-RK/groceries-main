<button {{ $attributes->merge(['type' => 'submit', 'class' => '
whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900
']) }}>
    {{ $slot }}
</button>
