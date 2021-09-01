<x-guest-layout>
    <h1 class="text-xl font-semibold tracking-tight md:text-2xl">
        Sign up
    </h1>

    <p class="mt-1 text-base font-medium text-gray-500">
        Or
        <a
            class="text-red-600 transition hover:text-red-500 focus:outline-none focus:underline"
            href="{{ route('login') }}"
        >log in</a> to your account.
    </p>

    <form
        class="mt-8 space-y-6 md:mt-12"
        action=""
    >
        <div class="space-y-2">
            <label
                class="inline-block text-sm font-medium text-gray-700"
                for="name"
            >Full name</label>

            <input
                class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-red-600 focus:border-red-600"
                id="name"
                type="text"
                name="name"
            >
        </div>

        <div class="space-y-2">
            <label
                class="inline-block text-sm font-medium text-gray-700"
                for="email"
            >Email address</label>

            <input
                class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-red-600 focus:border-red-600"
                id="email"
                type="email"
                name="email"
            >
        </div>

        <div class="space-y-2">
            <label
                class="inline-block text-sm font-medium text-gray-700"
                for="password"
            >Password</label>

            <input
                class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-red-600 focus:border-red-600"
                id="password"
                name="password"
                type="password"
            >
        </div>

        <div class="space-y-2">
            <label
                class="inline-block text-sm font-medium text-gray-700"
                for="password_confirmation"
            >Confirm your password</label>

            <input
                class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-red-600 focus:border-red-600"
                id="password_confirmation"
                name="password_confirmation"
                type="password"
            >
        </div>

        <button
            class="flex items-center justify-center w-full h-8 px-3 text-sm font-semibold tracking-tight text-white transition bg-red-600 rounded-lg shadow hover:bg-red-500 focus:bg-red-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-2 focus:ring-white focus:ring-inset"
            type="button"
        >Continue</button>
    </form>

    <div class="w-4 mx-auto mt-4 border-t border-gray-300"></div>

    <p class="mt-3 text-sm font-medium text-center">
        <a
            class="text-red-600 transition hover:text-red-500 focus:outline-none focus:underline"
            href="{{ route('login') }}"
        >Already registered?</a>
    </p>
</x-guest-layout>
