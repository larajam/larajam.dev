<x-guest-layout>
    <h1 class="text-xl font-semibold tracking-tight md:text-2xl">
        Reset your password
    </h1>

    <form
        class="mt-8 space-y-6 md:mt-12"
        action="{{ route('password.email') }}"
        method="POST"
    >
        <div class="space-y-2">
            <label
                class="inline-block text-sm font-medium text-gray-700"
                for="email"
            >Email address</label>

            <input
                class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-red-600 focus:border-red-600"
                id="email"
                name="email"
                type="email"
            >
        </div>

        <button
            class="flex items-center justify-center w-full h-8 px-3 text-sm font-semibold tracking-tight text-white transition bg-red-600 rounded-lg shadow hover:bg-red-500 focus:bg-red-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-2 focus:ring-white focus:ring-inset"
        >Continue</button>

        @csrf
    </form>

    <div class="w-4 mx-auto mt-4 border-t border-gray-300"></div>

    <p class="mt-3 text-sm font-medium text-center">
        <a
            class="text-red-600 transition hover:text-red-500 focus:outline-none focus:underline"
            href="{{ route('login') }}"
        >Remembered your password?</a>
    </p>
</x-guest-layout>
