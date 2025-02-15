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
    <link rel="stylesheet" href="https://unpkg.com/@marqueefy/marqueefy@1.0.3/dist/css/marqueefy.min.css" integrity="sha384-wADgvhAqbORDLWCl6LHRmwaldDxcsCZJ9EfC4tyLmlqRSrxK8SQSmUprPJYdtCZb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/js/marqueefy.min.js" integrity="sha384-GkNdpzZA0aigYQs7bhB94ikrs1rxyzcoGZqE/KBxsvvsQPERiMHw4vrDlCgDewnu" crossorigin="anonymous"></script>
    <title>Vivaldi</title>


</head>

<body>

    <div x-data="app" x-init="initializePlayer" class=" font-normal text-xl">


        <div class="h-36 backdrop-opacity-20 bg-gradient-to-b  justify-center flex flex-row  from-indigo-600 via-50% to-purple-800 border-1 border-white shadow-lg rounded-lg p-3 animate__animated animate__flipInX   bg-cover ">

            <div class="flex flex-row mt-10">
                <div class="" include-html="skins/vivaldi/_player.html"> </div>
            </div>

            <div class="flex flex-col mx-2">
                <div class="" include-html="skins/vivaldi/_status.html"></div>
                <div class="" include-html="skins/vivaldi/_icons.html"></div>
                <div class="mt-1" include-html="skins/vivaldi/_meta.html"></div>

            </div>


        </div>
        <!-- <footer class="text-sm" style="text-align: center; padding: 3px;">


            <p x-show="parseInt(station_data.toggle_brand)" class="mt-1">
                <a class="inline-flex shadow-md items-center justify-center rounded-full bg-purple-700 my-2 px-2.5 py-0.5 text-purple-200" target="_blank" ref="follow" href="https://stationpro.co" target="_blank">
                    <span class="whitespace-nowrap text-sm">powered by:</span>
                    <svg fill="currentColor" stroke="currentColor" class="ms-1 me-1.5 h-4 w-4" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z">
                        </path>
                    </svg>
                    <span x-text="copyright" class="whitespace-nowrap text-sm"></span>
                </a>
            </p>
        </footer> -->
    </div>

    <script>
        includeHTML();
    </script>

</body>

</html>