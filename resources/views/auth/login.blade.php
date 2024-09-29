<x-layout>
    <div class="bg-white lg:w-4/12 md:6/12 w-10/12 m-auto my-10 shadow-md">
        <div class="py-8 px-8 rounded-xl">
            <h1 class="font-medium text-2xl mt-3 text-center">Login</h1>

            @if (session()->has('message'))
                <span class="text-sm text-blue-700 my-2">
                    {{ session('message') }}
                </span>
            @endif

            <form action="{{ route('login') }}" method="POST" class="mt-6">
                @csrf
                <div class="my-5 text-sm">
                    <label for="username" class="block text-black">Username</label>
                    <input type="text" autofocus id="username"
                        class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" name="username"
                        placeholder="username" value="{{ old('username') }}" />
                    @error('username')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-5 text-sm">
                    <label for="password" class="block text-black">Password</label>
                    <input type="password" id="password"
                        class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" name="password"
                        placeholder="Password" />
                    @error('password')
                        <span class="text-xs italic text-red-600">{{ $message }}</span>
                    @enderror
                    <div class="flex justify-end mt-2 text-xs text-gray-600">
                        <a href="#">Forget Password?</a>
                    </div>
                </div>

                <button
                    class="block text-center text-white bg-gray-800 p-3 duration-300 rounded-sm hover:bg-black w-full">Login</button>
            </form>

            <p class="mt-12 text-xs text-center font-light text-gray-400"> Don't have an account? <a
                    href="{{ route('registration') }}" class="text-black font-medium"> Create One </a> </p>

        </div>
    </div>
</x-layout>
