<x-layout>
    <x-slot:heading>Users</x-slot:heading>

    <ul>
        @foreach($users as $user)
        <li>{{ $user->username }}</li>
        @endforeach
    </ul>
</x-layout>
