@if($isMobile())
    <a href="{{ $link }}"
       class="{{ $isActive() ? "text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" : "bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"}}"
    >{{ $name }}</a>
@else
    <a href="{{ $link }}"
       class="{{ $isActive() ? "text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" : "bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"}}"
    >{{ $name }}</a>
@endif
