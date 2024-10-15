<x-layout>
    <x-slot:heading>Register User</x-slot:heading>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
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
                                    value="{{ old('username') }}"
                                    placeholder="john_doe"
                                    autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 placeholder-gray-400 focus:placeholder-transparent focus:ring-0 sm:text-sm sm:leading-6"
                                />
                            </div>
                        </div>
                        @error('username')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
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
                            value="{{ old('first_name') }}"
                            placeholder=" John "
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:placeholder-transparent focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                    @error('first_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
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
                            value="{{ old('last_name') }}"
                            placeholder=" Doe "
                            autocomplete="last_name"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:placeholder-transparent focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                    @error('last_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
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
                            value="{{ old('email') }}"
                            placeholder="johndoe@email.com"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:placeholder-transparent focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
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
                Create User
            </button>
        </div>
    </form>
</x-layout>
