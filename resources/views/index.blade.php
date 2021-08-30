<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    <x-seo::meta />
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="{{ mix('css/app.css') }}"
    >
    <script
        src="{{ mix('js/app.js') }}"
        defer
    ></script>
    <title>{{ config('app.name') }}</title>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen pt-12 pb-24 overflow-x-hidden font-sans antialiased text-gray-800 bg-gray-100">
        <div class="w-full px-4 mx-auto max-w-screen-2xl sm:px-8">
            <div class="flex items-center justify-between space-x-2 text-red-600">
                <div class="w-4 h-4 bg-current rounded-tr-full"></div>

                <p class="text-xl font-bold">Larajam</p>

                <div class="flex justify-end w-full px-4 mx-auto space-x-4 max-w-screen-2xl sm:px-8 sm:space-x-8">
                    <a href="mailto:info@larajam.dev" title="Email" class="text-gray-400 hover:text-gray-800 focus:text-gray-800">
                        <x-entypo-email class="w-6 h-6 md:w-8 md:h-8" />
                    </a>
                    <a href="https://discord.gg/M94HErWE5v" target="_blank" title="Join Discord" class="text-gray-400 hover:text-gray-800 focus:text-gray-800">
                        <x-bi-discord class="w-6 h-6 md:w-8 md:h-8" />
                    </a>
                </div>
            </div>

            <section class="grid grid-cols-5 mt-12 lg:grid-cols-6">
                <div class="col-span-4 pb-6 pr-6 md:col-span-3">
                    <h1 class="text-2xl font-bold sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">A weekend-long
                        hackathon for Laravel developers.</h1>
                </div>

                <div class="pt-[100%] bg-red-600 rounded-tl-full"></div>
                <div class="pt-[100%] bg-red-200 rounded-tl-full"></div>
                <div class="pt-[100%] bg-red-900 rounded-tr-full"></div>

                <div class="pt-[100%] bg-red-600 rounded-bl-full"></div>
                <div class="pt-[100%] bg-red-200 rounded-tr-full"></div>
                <div class="pt-[100%] bg-red-900 rounded-tr-full"></div>

                <div class="pt-[100%] bg-red-200"></div>

                <div class="pt-[100%] bg-red-600 rounded-tl-full"></div>
                <div class="pt-[100%] bg-red-900 rounded-br-full"></div>
            </section>

            <section class="grid items-start grid-cols-6">
                <div class="pt-[100%] bg-red-900 rounded-br-full"></div>

                <div class="col-span-4 lg:col-span-3">
                    <div
                        class="relative z-50 flex flex-col items-center p-6 -mx-24 -mt-12 bg-white shadow-2xl md:p-12 sm:-mx-12">
                        <svg
                            class="absolute top-0 right-0 w-16 -m-2 text-white translate-x-1/2 -translate-y-1/2"
                            width="126"
                            height="121"
                            viewBox="0 0 126 121"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M2.08273 3.09025C1.58273 5.00692 1.16607 6.96525 0.999399 8.92358C0.457733 15.8403 -0.167265 39.0486 0.0410679 43.7153C0.0410679 45.1319 0.291067 46.7153 0.8744 48.0069C1.91607 50.2986 4.58273 50.4653 6.04106 48.3403C6.58273 47.5903 6.91606 46.5903 7.08273 45.6319C7.54106 42.8403 7.91606 40.0486 8.1244 37.2569C8.70773 28.8403 9.2494 20.3819 9.6244 11.9653C9.7494 9.17359 9.45773 6.34026 9.1244 3.54859C8.8744 1.46526 7.16607 -0.11808 5.58273 0.0069201C3.70773 0.173587 2.54107 1.38192 2.08273 3.09025ZM59.0828 58.5897C59.2425 57.9507 59.381 57.35 59.5131 56.7767L59.5132 56.7767C59.7947 55.5556 60.0475 54.4588 60.4161 53.3814C65.8328 37.3814 74.5411 23.1314 84.4578 9.58971C85.6244 8.00638 87.0828 6.50638 88.7078 5.50638C89.5828 4.96471 91.3328 5.04805 92.3328 5.58972C93.0828 6.00638 93.6244 7.63138 93.4578 8.54805C93.1661 10.298 92.5411 12.0897 91.6661 13.6731C85.9161 24.1314 80.1244 34.5481 74.2494 44.9231C72.5213 47.9555 70.7166 50.9624 68.9152 53.9637C68.4147 54.7977 67.9144 55.6312 67.4161 56.4647C66.6661 57.7564 65.8328 59.0064 64.9578 60.1731C63.9994 61.5064 62.5411 62.2981 61.0828 61.4231C60.9907 61.367 60.8979 61.3125 60.8053 61.2582L60.8052 61.2581C59.9339 60.7466 59.0828 60.2469 59.0828 58.5897ZM118.083 120.633C117.414 120.521 116.709 120.419 115.981 120.314C114.532 120.104 112.997 119.882 111.499 119.549C102.624 117.549 93.7494 115.549 84.9161 113.466C82.9994 113.008 81.1244 112.216 79.4161 111.299C77.1244 110.091 76.3328 108.383 76.7078 106.508C77.0828 104.633 78.5828 103.466 81.2078 103.424C82.9994 103.383 84.9161 103.424 86.6245 103.841C97.8328 106.674 109.041 109.591 120.208 112.549C121.458 112.883 122.749 113.466 123.708 114.299C126.124 116.341 125.374 119.549 122.291 120.341C121.527 120.525 120.697 120.543 119.779 120.563H119.779H119.779C119.244 120.575 118.681 120.587 118.083 120.633Z"
                                fill="black"
                            />
                        </svg>

                        <p class="text-center">How it works</p>

                        <div class="flex items-baseline w-full mt-6 space-x-6">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 rounded-full md:w-14 md:h-14">
                                <p class="text-2xl font-bold text-red-900 md:text-4xl">1</p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">Register your team</h3>

                                <p class="mt-2 text-xl text-gray-500">You can work alone or with friends. You just need
                                    to enter a team name and contact email address.</p>
                            </div>
                        </div>

                        <div class="h-12 my-6 border-l-2 border-gray-200 border-dashed rounded-full"></div>

                        <div class="flex items-baseline w-full space-x-6">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 rounded-full md:w-14 md:h-14">
                                <p class="text-2xl font-bold text-red-900 md:text-4xl">2</p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">Wait for the theme to be announced</h3>

                                <p class="mt-2 text-xl text-gray-500">We'll announce the theme 1 hour before the jam
                                    starts. This will give you enough time to think of an idea.</p>
                            </div>
                        </div>

                        <div class="h-12 my-6 border-l-2 border-gray-200 border-dashed rounded-full"></div>

                        <div class="flex items-baseline w-full space-x-6">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 rounded-full md:w-14 md:h-14">
                                <p class="text-2xl font-bold text-red-900 md:text-4xl">3</p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">Design and build</h3>

                                <p class="mt-2 text-xl text-gray-500">Start designing and building your project. You're
                                    free to use open-source packages and projects, just avoid paid products with
                                    restrictive licenses.</p>
                            </div>
                        </div>

                        <div class="h-12 my-6 border-l-2 border-gray-200 border-dashed rounded-full"></div>

                        <div class="flex items-baseline w-full space-x-6">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 rounded-full md:w-14 md:h-14">
                                <p class="text-2xl font-bold text-red-900 md:text-4xl">4</p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold md:text-3xl">Submit your project</h3>

                                <p class="mt-2 text-xl text-gray-500">Push your project to a GitHub repository and
                                    submit it for review. Our panel of judges will review your projects and rank them
                                    based on creativity, uniqueness and how close they match the theme.</p>
                            </div>
                        </div>

                        <div class="h-12 my-6 border-l-2 border-gray-200 border-dashed rounded-full"></div>

                        <form
                            class="w-full p-6 bg-red-50"
                            action="https://mowl.larajam.dev/subscribe/94437b4f-0a14-4150-a20f-22a914d7c66c"
                            method="POST"
                        >
                            <div class="flex flex-col w-full gap-6 md:items-center md:flex-row">
                                <input
                                    class="w-full h-12 px-3 placeholder-gray-600 bg-white"
                                    placeholder="Email address"
                                    type="email"
                                    name="email"
                                />

                                <button class="flex-shrink-0 h-12 px-6 font-bold text-white bg-red-600">
                                    Join list
                                </button>
                            </div>

                            <p class="mt-3 text-sm text-center">Join the mailing list to receive updates about prizes,
                                judges, themes and dates.</p>
                        </form>
                    </div>

                    <footer class="flex flex-col items-center mt-12">
                        <p class="text-center text-gray-500">
                            Hosted by
                            <a
                                class="text-red-600 underline"
                                href="https://twitter.com/ryangjchandler"
                            >Ryan</a>
                            & designed by
                            <a
                                class="text-red-600 underline"
                                href="https://twitter.com/larsklopstra"
                            >Lars</a>
                        </p>

                        <a
                            class="flex items-center mt-12 space-x-2"
                            href="https://laravel.com"
                        >
                            <span class="text-sm text-gray-500">Proudly powered by</span> <svg
                                class="h-6 text-red-600"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 272 280"
                            >
                                <path
                                    d="M271.38 63.42c-.03-.13-.11-.24-.15-.37-.09-.23-.16-.47-.28-.68-.08-.14-.2-.26-.3-.39-.13-.17-.24-.36-.39-.51-.13-.13-.29-.22-.43-.33-.16-.13-.3-.27-.48-.37l-52.45-30.2a4.354 4.354 0 00-4.36 0l-52.45 30.2c-.18.1-.32.25-.48.37-.14.11-.3.2-.43.33-.15.15-.26.34-.39.51-.1.13-.22.25-.3.39-.12.21-.2.45-.28.68-.05.12-.12.24-.15.37-.1.37-.15.75-.15 1.14v57.36l-43.71 25.17V34.87c0-.39-.05-.77-.15-1.14-.03-.13-.11-.24-.15-.37-.09-.23-.16-.47-.28-.68-.08-.14-.2-.26-.3-.39-.13-.17-.24-.36-.39-.51-.13-.13-.29-.22-.43-.33-.16-.13-.3-.27-.48-.37L59.57.88a4.354 4.354 0 00-4.36 0L2.76 31.08c-.18.1-.32.25-.48.37-.14.11-.3.2-.43.33-.15.15-.26.34-.39.51-.1.13-.22.25-.3.39-.12.21-.2.45-.28.68-.05.12-.12.24-.15.37-.1.37-.15.75-.15 1.14v179.66c0 1.56.84 3.01 2.19 3.79l104.91 60.4c.23.13.48.21.72.3.11.04.22.11.34.14a4.256 4.256 0 002.24 0c.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4a4.356 4.356 0 002.19-3.79v-57.36l50.26-28.94a4.356 4.356 0 002.19-3.79V64.56c-.05-.39-.11-.77-.2-1.14zM109.78 209.5l-43.63-24.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58zM210.33 97.29v49.8l-18.36-10.57-25.36-14.6v-49.8l18.36 10.57 25.36 14.6zm4.37-57.89l43.69 25.16-43.69 25.16-43.69-25.16L214.7 39.4zM80.07 166.72l-18.36 10.57V67.6L87.07 53l18.36-10.57v109.68l-25.36 14.61zm-22.73-157l43.69 25.16-43.69 25.16-43.69-25.16L57.34 9.72zM9.25 42.43L27.61 53l25.36 14.6v117.26c0 .17.05.33.07.49.03.21.03.43.09.64v.01c.05.17.14.33.21.49.08.18.13.38.23.55 0 0 0 .01.01.01.09.15.22.28.33.42.12.16.22.32.36.46l.01.01c.12.12.28.21.42.32.16.12.3.26.47.36.01 0 .01 0 .02.01.01 0 .01.01.02.01l50.24 28.43v50.29L9.25 212V42.43zM210.33 212l-96.17 55.37v-50.3l71.22-40.66 24.95-14.24V212zm52.45-90.08l-43.71 25.17v-49.8l25.36-14.6 18.36-10.57v49.8h-.01z"
                                    fill="currentColor"
                                />
                            </svg>
                        </a>
                    </footer>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
