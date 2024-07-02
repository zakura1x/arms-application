<x-guest-layout>

    <div class="font-poppins antialiased text-black flex flex-col md:h-screen">
        @include('auth.header')

        <div
            class="flex flex-col md:flex-row bg-gradient-to-b from-[#FFFFFF] from-10 to-[#258245] h-screen items-center justify-center">
            <div class="w-full lg:w-[35%] xl:w-[30%] p-4 mx-auto lg:ml-28 xl:ml-36 ">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center justify-center flex-col mb-20">
                        <p class="font-poppins font-semibold text-[40px] text-[#14B56A]">Welcome Back</p>
                        <p class="font-semibold text-gray-400">Login to your account</p>
                    </div>
                    <form action="{{ route('login') }}" method="POST" class="text-black">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block font-medium text-gray-400">Email</label>
                            <input type="text" id="email" name="email"
                                class="input input-bordered bg-white w-full border-[#9BB1AF]" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-medium text-gray-400">Password</label>
                            <input type="password" id="password" name="password"
                                class="input input-bordered bg-white w-full border-[#9BB1AF]" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        {{-- <div class="flex justify-end mb-4">
                            <input type="checkbox" id="remember_me" name="remember_me"
                                class="checkbox checkbox-success" />
                            <label for="remember_me" class="ml-2 text-gray-700">Remember me</label>
                        </div> --}}
                        <div class="flex flex-row justify-between">

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" {{ __('Forgot your password?') }}
                                    class="text-[#12AB63]">Forgot Password?</a>
                            @endif
                            <button type="submit"
                                class="text-white px-6 py-2 rounded-lg cursor-pointer bg-[#12AB63]">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden md:flex w-1/2 p-4 ml-36"> <!-- Hide on small screens -->
                <div class="flex flex-col items-start justify-start h-full">
                    <p class="text-[48px] font-bold">ACCOUNTANCY</p>
                    <p class="text-[48px] font-bold">REVIEW MANAGEMENT</p>
                    <p class="text-[48px] font-bold">SYSTEM</p>
                    <p class="text-black font-italic text-[20px]">excel beyond your dreams</p>
                </div>
            </div>
        </div>


        @include('auth.footer')
    </div>

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
