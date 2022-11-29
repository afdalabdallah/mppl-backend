<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <style>
        /* custom scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Scripts -->
</head>

<body class="overflow-x-hidden scroll-smooth scrollbar bg-white">
    <nav>
        <div class="bg-black h-[65px] flex flex-row text-white justify-between">
            <div class="flex items-center justify-center ml-5">
                <a href="index.html">
                    <img src="/img/icon.png" alt="Pakai.in" class="h-[50px]">
                </a>
                <div class="text-white text-4xl font-bold ">
                    <span class="text-[#2DBE78]">Pakai.</span>In
                </div>
            </div>
            <div class="flex items-center justify-center text-[#2DBE78] font-semibold gap-10 mr-5">
                <div>
                    <a href="/dashboard" class="hover:text-white">Dashboard</a>
                </div>
                <div>
                    <a href="/cart" class="hover:text-white">Cart</a>
                </div>
                @guest
                    <div>
                        <a href="/login">
                            <div>
                                <button
                                    class="bg-[#2DBE78] text-black hover:bg-white font-semibold hover:text-[#2DBE78] py-2 px-4 rounded-full">
                                    Login
                                </button>
                            </div>
                        </a>
                    </div>
                @endguest
                @auth
                    <div>
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button"
                                    class="inline-flex justify-center w-full rounded-full border border-transparent shadow-sm px-2 py-2 bg-transparent text-sm font-medium text-white hover:bg-white hover:text-[#2DBE78]"
                                    id="options-menu" aria-haspopup="true" aria-expanded="true">
                                    <img src="/img/profile.png" alt="avatar" class="h-[30px] w-[30px] rounded-full">
                                </button>
                            </div>
                            <div class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="options-menu"
                                id="profileDropdown">
                                <div class="py-1" role="none">
                                    <a href="/profile" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="options-menu-item-0">Profile</a>
                                    <a href="/order" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="options-menu-item-1">Order Status</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                            id="options-menu-item-1">Logout</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endauth

            </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('main')
    </main>

    <footer class="bg-black h-[350px] text-white p-[70px] mt-20">
        <!-- container -->
        <div class="">
            <!-- row -->
            <div class="flex flex-wrap justify-around">
                <!-- col -->
                <div class="flex flex-col mt-5">
                    <h1 class="text-white text-5xl font-bold"><span class="text-[#2DBE78]">Pakai.</span>In</h1>
                    <h2 class="font text-gray-400 tracking-wider">Perform brilliantly with amazing brands</h2>
                    <!-- social media -->
                    <div class="flex mt-5">
                        <!-- social media (green rounded square with black logo) -->
                        <a href="">
                            <div
                                class="bg-[#2DBE78] rounded-md h-[50px] w-[50px] flex items-center justify-center mr-5 hover:text-[#2DBE78] hover:bg-white">
                                <ion-icon name="logo-facebook" class="text-black text-2xl"></ion-icon>
                            </div>
                        </a>
                        <a href="">
                            <div
                                class="bg-[#2DBE78] rounded-md h-[50px] w-[50px] flex items-center justify-center mr-5 hover:text-[#2DBE78] hover:bg-white">
                                <ion-icon name="logo-instagram" class="text-black text-2xl"></ion-icon>
                            </div>
                        </a>
                        <a href="">
                            <div>
                                <div
                                    class="bg-[#2DBE78] rounded-md h-[50px] w-[50px] flex items-center justify-center mr-5 hover:text-[#2DBE78] hover:bg-white">
                                    <ion-icon name="logo-twitter" class="text-black text-2xl"></ion-icon>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div
                                class="bg-[#2DBE78] rounded-md h-[50px] w-[50px] flex items-center justify-center mr-5 hover:text-[#2DBE78] hover:bg-white">
                                <ion-icon name="logo-linkedin" class="text-black text-2xl"></ion-icon>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Company
                    </h4>
                    <ul>
                        <li class="flex flex-col text-gray-400 gap-5 mt-5">
                            <a href="" class="hover:text-white">About</a>
                            <a href="" class="hover:text-white">Contact Us</a>
                            <a href="" class="hover:text-white">Support</a>
                            <a href="" class="hover:text-white">Careers</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Quick Link
                    </h4>
                    <ul>
                        <li class="flex flex-col text-gray-400 gap-5 mt-5">
                            <a href="" class="hover:text-white">Share Location</a>
                            <a href="" class="hover:text-white">FAQs</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Legal
                    </h4>
                    <ul>
                        <li class="flex flex-col text-gray-400 gap-5 mt-5">
                            <a href="" class="hover:text-white">Terms & Conditions</a>
                            <a href="" class="hover:text-white">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const dropdownProfile = document.getElementById("options-menu");
        const dropdownProfileMenu = document.getElementById("profileDropdown");

        dropdownProfile.addEventListener("click", () => {
            dropdownProfileMenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
