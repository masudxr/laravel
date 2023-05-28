@props(['name', 'type' =>'text'])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-400 p-2 w-full" value="{{ old($name)}}" type="{{ $type }}" name="{{ $name}}" id="{{ $name}}" required>

    <x-form.error name="{{ $name }}" />

</div>