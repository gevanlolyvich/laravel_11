@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium block" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>