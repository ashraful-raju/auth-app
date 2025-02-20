<x-layout>

    <body class="bg-gray-100">
        <div class="container mx-auto py-8">
            <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
            <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="{{ route('registration') }}"
                method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" id="name" name="name" placeholder="John Doe" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">username</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="username" id="username" name="username" placeholder="Enten User Name"
                        value="{{ old('username') }}">
                    @error('username')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="email" id="email" name="email" placeholder="john@example.com"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="password" id="password" name="password" placeholder="********" />
                    @error('password')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm
                        Password</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="password" id="confirm-password" name="password_confirmation" placeholder="********" />
                </div>
                <button
                    class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                    type="submit">Register</button>
            </form>
        </div>
    </body>
</x-layout>
