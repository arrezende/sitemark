@props(['label' => '', 'name'])

<label class="flex flex-col gap-1 text-sm/[16px]">
    @if($label)
    {{ $label }}
    @endif
    <input name="{{ $name }}"
        {{ $attributes->class(['border bg-darkSecondary border-darkSecondary rounded-md p-3 w-full mt-1']) }}
        value="{{ old($name) }}">

    @error($name)
    <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</label>