<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />


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
        <div class="ml-52 mt-80 text-left">
            <h1 class="font-bold text-4xl">Trust Us!</h1>
            <h2 class="font-normal tracking-wide text-xl mt-5">
                We are ready to bring the trends <p>and fashion do you needs</p>
            </h2>
        </div>
        <div class="mr-52">
            <div class="mt-52">
                <h1 class="text-[#2DBE78] font-bold text-5xl" style="margin-left: 22.5rem">LOGIN</h1>
                <div class="flex justify-end mt-12">

                    {{-- <h1 class="text-[#2DBE78] font-bold text-5xl">LOGIN</h1> --}}
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
                            Don't have an account? <a href="/register" class="text-[#81D8AE]">Register</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
