<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakai.in | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

{{-- <body>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</body> --}}

<body style="background-image: url('/img/login-register.png');" class="text-white overflow-hidden">
    <div class="flex flex-row justify-center items-center m-5">
        <img src="/img/icon.png" alt="icon" class="w-10 h-10">
        <h1 class="text-3xl font-bold text-white"><span class="text-[#2DBE78]">Pakai.</span>In</h1>
    </div>

    <div class="grid grid-cols-2 h-screen">
        <div class="ml-52 mt-80 text-left">
            <h1 class="font-bold text-5xl">Trust Us!</h1>
            <h2 class="font-normal tracking-wide text-2xl mt-5">
                We are ready to bring the trends <p>and fashion do you needs</p>
            </h2>
        </div>
        <div class="mr-52">
            <!-- Nama, No. Telepon, Email, Password, Confirm Password -->
            <div class="mt-24 text-right text-[#2DBE78] font-bold text-5xl">
                <h1>REGISTER</h1>
            </div>
            <div class="flex justify-end mt-12">
                <form method="POST" action="{{ route('register') }}" class="right">
                    @csrf
                    <div>
                        <label for="nama" class="font-semibold">Nama</label><br>
                        <input type="text" name="name" id="name"
                            class="w-96 h-10 rounded-lg mt-2 mb-2 pl-5 text-black" placeholder="Nama"><br>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <label for="no_telp" class="font-semibold">No. Telepon</label><br>
                        <input type="text" name="no_telp" id="no_telp"
                            class="w-96 h-10 rounded-lg mt-2 mb-2 pl-5 text-black" placeholder="No. Telepon"><br>
                        <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
                    </div>
                    <div>
                        <label for="email" class="font-semibold">Email</label><br>
                        <input type="email" name="email" id="email"
                            class="w-96 h-10 rounded-lg mt-2 mb-2 pl-5 text-black" placeholder="Email"><br>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="font-semibold">Password</label><br>
                        <input type="password" name="password" id="password"
                            class="w-96 h-10 rounded-lg mt-2 mb-2 pl-5 text-black" placeholder="Password"><br>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <label for="confirm_password" class="font-semibold">Confirm Password</label><br>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            class="w-96 h-10 rounded-lg mt-2 pl-5 text-black" placeholder="Confirm Password"><br>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>


                    <div class="flex flex-row justify-end items-center mt-5"><br>
                        <button type="submit"
                            class="text-[#81D8AE] bg-white font-bold py-2 px-4 rounded-lg w-24 text-center mr-36 hover:text-white hover:bg-[#81D8AE]">Register
                        </button>
                    </div>
                    <div class="mt-5 ml-20">
                        Already have an account? <a href="/login" class="text-[#81D8AE]">Login</a>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
