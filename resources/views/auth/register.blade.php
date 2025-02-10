<x-layout.app>
    <x-layout.login>
        <img src="logo.svg" alt="logo" class='mb-10'>
        <div class="w-2/3">
            <x-title>Criar conta</x-title>
            <form action="{{ route('register')}}" method="post" class="flex flex-col gap-4">
                @csrf
                
                <div class="grid grid-cols-2 gap-4">
                    <x-input label="Nome" name="name" type="text" class="" />
                    <x-input label="Sobrenome" name="last_name" type="text" class="" />
                </div>
                <x-input label="Email" name="email" type="email" />

                <x-input label="Password" name="password" type="password" />
                <x-input label="Confirmar password" name="password_confirmation" type="password" />
                <x-button>Criar conta</x-button>

                <a href="{{ route('login') }}" class="w-full text-center text-xs">Já tem cadastro?
                    <strong>Acessar
                        conta</strong></a>
            </form>
        </div>
    </x-layout.login>
</x-layout.app>