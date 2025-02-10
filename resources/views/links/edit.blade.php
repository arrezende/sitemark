<x-layout.app>
    <x-container>
        <header>
            <span class="flex justify-center items-center">
                <img src="/public/logo.svg" alt="logo" class='mb-10'>
            </span>
            <div class="btns flex justify-between items-center">
                <x-title>Editar link</x-title>
                <div class="groupButtons mb-10">
                    <x-button inverted icon>Adicionar Link</x-button>

                </div>
            </div>
        </header>
        <main class="max-h-[60vh] overflow-y-auto p-4">
            <form action="{{ route('links.edit', $link) }}" method="post" enctype="multipart/form-data" 
            >
            @csrf
            @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div class="">
                       
                        <x-input label="Nome" name="name" type="text" value="{{ old('name', $link->name) }}" class="mb-4" />
                        <x-input label="Tag" name="tag" type="text" value="{{ old('tag', $link->tag) }}" class="mb-4" />
                        <x-input label="Link" name="link" type="text" value="{{ old('link', $link->link) }}"
                            class="col-span-2"
                            />
                    </div>
                    <div class="flex flex-col align-center justify-center">
                        <img src="/storage/{{ $link->image}}" alt="imagem" class="w-24 h-24 object-cover mx-auto mb-3 rounded-xl">
                    
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full cursor-pointer">
                                    <div class="flex items-center justify-center pt-5 pb-6 gap-4 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                          </svg>
                    
                    
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Adicionar imagem</p>
                    
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" name="image"/>
                                </label>
                            </div>
                    
                    </div>
                </div>

                <div class="flex gap-4 justify-end items-center ">
                    <a href="{{ route('dashboard')}}" class="inline-block px-12 py-2 rounded-full my-6 bg-darkSecondary border border-accentOrange text-accentOrange hover:bg-accentOrange hover:text-white">Voltar</a>
                    <x-button class="!mx-0">Salvar</x-button>
                </div>
            </form>
        </main>
        <footer>
            <nav>
                <a href="#">Links</a>
                <a href="#">Profile</a>
                <a href="#">logout</a>
            </nav>
        </footer>

    </x-container>
</x-layout.app>