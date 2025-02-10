<x-layout.app>
    <x-container>
        <header>
            <span class="flex justify-center items-center">
                <img src="/logo.svg" alt="logo" class='mb-10'>
            </span>
            <div class="btns flex justify-between items-center">
                <x-title>Editar perfil</x-title>
                
            </div>
        </header>
        <main class="max-h-[60vh] overflow-y-auto p-4">
            <form action="{{ route('profile') }}" method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <x-input class='mb-4' label="Nome" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" />
                <x-input class='mb-4' label="Sobrenome" name="last_name" type="text" value="{{ old('last_name', auth()->user()->last_name) }}"/>
            </div>
            {{-- <x-input class='mb-4' label="Password" name="password" type="password" />
            <x-input class='mb-4' label="Confirmar password" name="password_confirmation" type="password" /> --}}
            

            <x-button href="{{ route('dashboard') }}" inverted>Cancelar</x-button>
                    <x-button>Salvar</x-button>
                </form>
        </main>
        <x-footer active='profile'></x-footer>

    </x-container>
</x-layout.app>