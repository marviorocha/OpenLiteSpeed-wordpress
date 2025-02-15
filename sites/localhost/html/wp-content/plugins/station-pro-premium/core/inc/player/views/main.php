<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" href="../assets/css/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/player.css">
    <link rel="stylesheet" href="../assets/css/material_icos.css" />
    <script type="text/javascript" src="../assets/javascript/alpine.min.js" defer></script>
    <script type="text/javascript" src="../assets/javascript/radio.js"></script>
    <script type="text/javascript" src="../assets/javascript/amplitude.js"></script>
    <script type="text/javascript" src="../assets/javascript/tailwindcss.js"></script>
    <script type="text/javascript" src="../assets/javascript/include-w3school.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@marqueefy/marqueefy@1.0.3/dist/css/marqueefy.min.css"
        integrity="sha384-wADgvhAqbORDLWCl6LHRmwaldDxcsCZJ9EfC4tyLmlqRSrxK8SQSmUprPJYdtCZb" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/js/marqueefy.min.js"
        integrity="sha384-GkNdpzZA0aigYQs7bhB94ikrs1rxyzcoGZqE/KBxsvvsQPERiMHw4vrDlCgDewnu"
        crossorigin="anonymous"></script>
    <title>Player</title>

</head>

<body>

    <div x-data="app" x-init="initializePlayer" class="font-normal text-xl">


        <div x-show="!screen" x-bind="closeWindow" class=" z-10 flex item-center justify-end mx-8 mt-8">
            <span
                class="inline-flex items-center animate__animated animate__pulse animate__infinite infinite relative rounded-full p-2 z-10 cursor-pointer bg-red-500/[.6] backdrop-blur-lg text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
                role="alert" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.348 14.651a3.75 3.75 0 010-5.303m5.304 0a3.75 3.75 0 010 5.303m-7.425 2.122a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.007H12V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>

                <span
                    class="whitespace-nowrap z-10 inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2" />Open
                player</span>
            <span class="animate-ping absolute  top-2 left-2 z-1 rounded-full w-10 h-10 bg-gray-200 opacity-40"></span>
            </span>
        </div>

        <!-- // star navbar player // -->

        <div x-show="screen" :class="'bg-[' + station_data.nav_bg_color + ']/' + station_data.nav_opacity "
            class="h-screen animate__animated animate__slideInUp bg-gray-400/95 backdrop-blur-lg dark:bg-slate-900/[.6]">

            <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
                <!-- Grid -->
                <div class="flex justify-center md:justify-between items-center flex-row-reverse md:flex-row">

                    <div class="" include-html="shered/_meta.html"></div>

                    <div class="grow  items-center  space-x-2">

                        <div include-html="shered/_player.html"></div>

                    </div>

                    <div include-html="shered/_icons.html"></div>

                </div>


            </div>
        </div>
    </div>

    <script>
        includeHTML();
    </script>

</body>

</html>
