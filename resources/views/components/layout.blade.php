<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 leading-5">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Blog App</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js"
            integrity="sha256-Fb0zP4jE3JHqu+IBB9YktLcSjI1Zc6J2b6gTjB0LpoM="
            crossorigin="anonymous"
        ></script>
        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }
        </style>
    </head>

    <body class="h-full">
        <!--
            This example requires updating your template:

            ```
            <html class="h-full bg-gray-100">
            <body class="h-full">
            ```
            -->
        <div class="min-h-full">
            <nav class="dark:bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img
                                    class="h-8 w-8"
                                    src="https://assets.laracasts.com/images/primary-logo-symbol.svg"
                                    alt="Your Company"
                                />
                            </div>
                            <div class="hidden md:block">
                                <div
                                    class="ml-10 flex items-baseline space-x-4"
                                >
                                    <!-- Home link -->
                                    <x-nav-link
                                        href="/"
                                        :active="request()->is('/')"
                                    >
                                        Home
                                    </x-nav-link>

                                    <x-nav-link
                                        href="/users"
                                        :active="request()->is('contact')"
                                    >
                                        Users
                                    </x-nav-link>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button
                                    type="button"
                                    class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                >
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only"
                                        >View notifications</span
                                    >
                                    <svg
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                                        />
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button
                                            type="button"
                                            class="relative flex max-w-xs items-center rounded-full border p-1 bg-gray-600 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                            id="user-menu-button"
                                            aria-expanded="false"
                                            aria-haspopup="true"
                                        >
                                            <span
                                                class="absolute -inset-1.5"
                                            ></span>
                                            <span class="sr-only"
                                                >Open user menu</span
                                            >
                                            <img
                                                class="h-8 w-8 rounded-full"
                                                src="https://assets.laracasts.com/images/mascot/larypeek.svg"
                                                alt=""
                                            />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button
                                type="button"
                                id="menu-toggle"
                                class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                aria-controls="mobile-menu"
                                aria-expanded="false"
                            >
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg
                                    class="block h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                    />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg
                                    class="hidden h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div
                    class="hidden md:hidden transition-all duration-200 delay-150 ease-in-out"
                    id="mobile-menu"
                >
                    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <!-- Home link with conditional class -->
                        <a
                            href="/"
                            class="{{
                                request()->is('/') 
                                    ? 'bg-gray-900 text-white' 
                                    : 'text-gray-300 hover:bg-gray-700 hover:text-white'
                            }} block rounded-md px-3 py-2 text-base font-medium"
                            aria-current="page"
                        >
                            Home
                        </a>

                        <!-- Users link -->
                        <a
                            href="/users"
                            class="{{
                              request()->is('contact') 
                                  ? 'bg-gray-900 text-white' 
                                  : 'text-gray-300 hover:bg-gray-700 hover:text-white'
                          }} block rounded-md px-3 py-2 text-base font-medium"
                        >
                            Users
                        </a>
                    </div>

                    <div class="border-t border-gray-700 pb-3 pt-4">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img
                                    class="h-10 w-10 rounded-full"
                                    src="https://assets.laracasts.com/images/mascot/larypeek.svg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <div
                                    class="text-base font-medium leading-none text-white"
                                >
                                    Lary Bot
                                </div>
                                <div
                                    class="text-sm font-medium leading-none text-gray-400"
                                >
                                    larybot@example.com
                                </div>
                            </div>
                            <button
                                type="button"
                                class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            >
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow">
                <div
                    class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between"
                >
                    <h1
                        class="text-3xl font-bold tracking-tight text-gray-900 w-full"
                    >
                        {{ $heading }}
                    </h1>

                    <x-button href="{{ route('users.create') }}">
                        Create
                    </x-button>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <!-- Your content -->
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
    <script>
        $(document).ready(function () {
            $(document).ready(function () {
                $("#menu-toggle").click(function () {
                    // Toggle the mobile menu visibility
                    $("#mobile-menu").toggleClass("hidden");

                    // Toggle the icons (hamburger and close icons)
                    $(this)
                        .find("svg")
                        .each(function () {
                            $(this).toggleClass("hidden");
                        });
                });
            });
        });
    </script>
</html>
