@props(['inverted' => null, 'icon' => null, 'href' => null ])

@php
$tag = $href ? 'a': 'button';
$css = 'bg-accentOrange text-white hover:bg-accentOrange/80';
@endphp
@if($inverted)
@php
$css = 'bg-darkSecondary border border-accentOrange text-accentOrange hover:bg-accentOrange hover:text-white';
@endphp
@endif
<{{ $tag }} {{ $tag == 'a' ? "href=$href" : ''}} type="submit" {{ $attributes->class("inline-block px-12 py-2 rounded-full mx-auto my-6 $css") }}>
    @if($icon)
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>

      @endif
    {{$slot}}</{{ $tag }}>