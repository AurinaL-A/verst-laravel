@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-solid border-1 border-indigo-600 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm']) !!}>
