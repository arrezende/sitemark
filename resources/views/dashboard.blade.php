<x-layout.app>
    <x-container>
        <header>
            <span class="flex justify-center items-center">
                <img src="logo.svg" alt="logo" class='mb-10'>
            </span>
            <div class="btns flex justify-between items-center">
                <x-title>Links</x-title>
                <div class="groupButtons mb-10">
                    <x-button href="{{ route('links.create') }}" inverted icon>Adicionar Link</x-button>

                </div>
            </div>
        </header>
        <main class="max-h-[60vh] overflow-y-auto p-4">
            <ul>
                @foreach ($links as $link)

                <li class="grid grid-cols-6 items-center mb-4">
                    <div class="flex">
                        @if(!$loop->last)
                        <form action="{{ route('links.down', $link) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                </svg>
                            </button>
                        </form>

                        @else
                        <button disabled class="p-4 size-14 inline-block"></button>
                        @endif
                        @unless($loop->first)
                        <form action="{{ route('links.up', $link) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                </svg>
                            </button>
                        </form>
                        @else
                        <button disabled class="p-4 size-14"></button>
                        @endunless
                    </div>
                    <div class="bg-darkSecondary p-4 rounded-2xl col-span-5 flex justify-between">
                        <div class="flex gap-4">
                            <img src="{{ $link->image }}" alt="imagem" class="size-16 rounded-xl">
                            <div class="flex flex-col justify-center">
                                <h2 class="font-semibold text-[1rem] mb-1">{{ $link->name }} {{ $link->sort}}<span
                                        class="text-xs bg-blue-700 py-1 px-3 rounded-2xl ml-4">{{ $link->tag }}</span>
                                </h2>
                                <span class="text-xs text-[#919191]">{{ $link->link }}</span>
                            </div>

                        </div>

                        <div class="flex gap-4 justify-center items-center border-l-[1px] border-[#161412]">
                            <form action="{{ route('links.edit', $link) }}" method="get">

                            
                            <button class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                            </button>
                        </form>
                            <form action="{{ route('links.destroy', $link) }}" method="POST"  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button href="#" class="p-4" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>    
                                </button>
                            </form>
                        </div>
                    </div>

                </li>
                @endforeach
            </ul>
        </main>

        <x-footer active='dashboard'></x-footer>

    </x-container>
</x-layout.app>