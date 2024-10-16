<x-layout>
    <x-slot:heading>User</x-slot:heading>

    <form action="" method="">
        <div class="space-y-12">
            <div class="border-gray-900/10">
                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Personal Information
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>

                <div
                    class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                >
                    <div class="sm:col-span-4">
                        <label
                            for="username"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Username</label
                        >
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
                            >
                                <span
                                    class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"
                                    >blog-app.com/</span
                                >
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    value="{{$user->username}}"
                                    placeholder="{{$user->username}}"
                                    autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label
                        for="first-name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >First name</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="first_name"
                            id="first_name"
                            value="{{$user->first_name}}"
                            placeholder="{{$user->first_name}}"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label
                        for="last-name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Last name</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="last_name"
                            id="last_name"
                            value="{{$user->first_name}}"
                            placeholder="{{$user->last_name}}"
                            autocomplete="last_name"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="{{$user->last_name}}"
                        />
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label
                        for="email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Email address</label
                    >
                    <div class="mt-2">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{$user->email}}"
                            placeholder="{{$user->email}}"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="{{$user->email}}"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="text-sm font-semibold leading-6 text-gray-900"
            >
                Cancel
            </button>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
                Save
            </button>
        </div>
    </form>
</x-layout>
