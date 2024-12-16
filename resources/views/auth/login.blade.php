<x-guest-layout>
    <div>
        <h2 id="greeting" class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        </h2>
        <p id="quote" class="mt-2 text-center text-sm text-gray-600">
        </p>
    </div>
    <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Nama akun</label>
                <input id="username" name="username" type="text" required
                    class="appearance-none relative block w-full px-3 py-2 border @error('username') border-red-300 @else @enderror placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm mt-1"
                    placeholder="Masukan akun Anda" value="{{ old('username') }}">
            </div>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata sandi</label>
                <input id="password" name="password" type="password" required
                    class="appearance-none relative block w-full px-3 py-2 border @error('password') border-red-300 @else @enderror placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm mt-1"
                    placeholder="Masukkan kata sandi Anda">
            </div>
        </div>

        <!-- Error Alert -->
        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            Username atau password salah. Silakan coba lagi.
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                    class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                    Ingat Saya
                </label>
            </div>

            <!-- <div class="text-sm">
                <a href="{{ route('password.request') }}" class="font-medium text-red-600 hover:text-red-500">
                    Forgot your password?
                </a>
            </div> -->
        </div>

        <div>
            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-red-500 group-hover:text-red-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                Masuk
            </button>
        </div>
    </form>
    </div>
</x-guest-layout>
