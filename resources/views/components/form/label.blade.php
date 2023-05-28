@props(['name'])

<label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="{{$name}}">
    {{ ucwords($name)}}
</label>