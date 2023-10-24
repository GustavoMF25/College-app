<x-layout.auth>
    <div class="flex min-h-screen">
        <div class="bg-gradient-to-t from-[#0074D9] to-[#D29218] w-1/2  min-h-screen hidden lg:flex flex-col items-center justify-center text-white p-4">
            <div class="w-full mx-auto mb-5">
                <img src="{{tenant('icone') ? tenant('icone') : '/assets/images/icon-colege.png'}}" class="lg:max-w-[370px] xl:max-w-[500px] mx-auto" />
            </div>
            <h3 class="text-3xl font-bold mb-4 text-center">Bem vindo ao sistema {{tenant('name') ? tenant('name') : 'Colegio - Central'}}</h3>
            <p>O gerenciamento de Alunos, Professores e Diretores reunidos em um unico lugar!</p>
        </div>
        <div class="w-full lg:w-1/2 relative flex justify-center items-center">
            <div class="max-w-[580px] p-3 md:p-5">
                <h2 class="font-bold text-3xl mb-3">Logar</h2>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <p class="mb-7">Digite seu e-mail e sua senha! </p>
                <form class="space-y-5 " method="POST" action="{{ tenant('id') ? route('tenant.login') : route('login') }}">
                    @csrf
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-input" name="email" placeholder="Digite seu E-mail" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" class="form-input" required autocomplete="current-password" placeholder="Enter Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary w-full">SIGN IN</button>
                </form>
                <div class="relative my-7 h-5 text-center before:w-full before:h-[1px] before:absolute before:inset-0 before:m-auto before:bg-[#ebedf2] ">
                    <div class="font-bold text-white-dark bg-[#fafafa] px-2 relative z-[1] inline-block">
                        <span>OR</span>
                    </div>
                </div>
                <p class="text-center">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha ?') }}
                    </a>
                    @endif
                </p>
            </div>
        </div>
    </div>

</x-layout.auth>