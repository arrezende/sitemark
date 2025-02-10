<x-layout.app>
    <x-layout.login>
        <img src="logo.svg" alt="logo" class='mb-10'>
        <div class="w-2/3">
            <x-title>Acessar conta</x-title>

            <form action="{{ route('login')}}" method="post" class="flex flex-col gap-4">
                @csrf
                <x-input label="Email" name="email" type="email" />
                <x-input label="Password" name="password" type="password" />
                <x-button>Acessar conta</x-button>

                <a href="{{ route('register') }}" class="w-full text-center text-xs">Não tem cadastro?
                    <strong>Criar
                        conta</strong></a>
            </form>
        </div>
    </x-layout.login>
</x-layout.app>