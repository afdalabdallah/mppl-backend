{{-- <x-guest-layout> --}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
    {{--
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakai.in | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
</head>

<body style="background-image: url('/img/login-register.png');" class="text-white overflow-hidden">
    <div class="flex flex-row justify-center items-center m-5">
        <img src="/img/icon.png" alt="icon" class="w-10 h-10">
        <h1 class="text-3xl font-bold text-white"><span class="text-[#2DBE78]">Pakai.</span>In</h1>
    </div>

    <div class="grid grid-cols-2 h-screen">
        <div class="ml-44 mt-80 text-left">
            <h1 class="font-bold text-4xl">Trust Us!</h1>
            <h2 class="font-normal tracking-wide text-xl mt-5">
                We are ready to bring the trends <p>and fashion do you needs</p>
            </h2>
        </div>
        <div>
            <div class="mr-20 mt-52 text-right text-[#2DBE78] font-bold text-5xl">
                <h1>LOGIN</h1>
            </div>
            <div class="flex justify-end mr-20 mt-12">
                <form action="{{ route('login') }}" method="POST" class="right">
                    @csrf
                    <div>
                        <label for="email" class="font-semibold">Email</label><br>
                        <input style="color: black" type="email" name="email" id="email"
                            class="w-96 h-10 rounded-lg mt-2 mb-2 pl-5" placeholder="Email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="font-semibold">Password</label><br>
                        <input style="color: black" type="password" name="password" id="password"
                            class="w-96 h-10 rounded-lg mt-2 pl-5" placeholder="Password"><br>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex flex-row justify-end items-center mt-5"><br>
                        <button type="submit"
                            class="text-[#81D8AE] bg-white font-bold py-2 px-4 rounded-lg w-20 text-center mr-36 hover:text-white hover:bg-[#81D8AE]">Login
                        </button>
                    </div>
                    <div class="mt-5 ml-20">
                        Don't have an account? <a href="register.html" class="text-[#81D8AE]">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>