<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.2/dist/full.css" rel="stylesheet" type="text/css" />


    @vite('resources/css/app.css')
    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        @media (max-width:1600px) {
            .hilang {
                display: block;
            }

            .mobileHilang {
                display: none;
            }
        }

        @media (max-width:480px) {
            .hilang {
                display: none;
            }

            .mobileHilang {
                display: block;
            }
        }



        .dihover:hover {
            box-shadow: 0 0 2px #c1894a, 0 0 5px #C6FF00, 0 0 4px #C6FF00, 0 0 6px #95ef89, 0 0 8px #B8C1EC, 0 0 10px #8176AF, 0 0 15px #8176AF;
            text-shadow: 0 0 2px #C6FF00, 0 0 5px #fff, 0 0 9px #fff, 0 0 4px rgb(0, 255, 72), 0 0 7px #0ff, 0 0 8px #0ff, 0 0 12px #0ff;
        }

        .imgCard {
            width: 55px;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 2px;
        }

        .carousel {
            flex: 0 0 auto;
            animation: carousel 4s alternate infinite;
        }

        .carousel2 {
            flex: 0 0 auto;
            animation: carousel2 4s alternate infinite;
        }

        .carousel_items {
            display: flex;
        }

        @keyframes carousel {
            0% {
                transform: translateX(-4%);
            }

            100% {
                transform: translateX(4%);
            }
        }

        @keyframes carousel2 {
            0% {
                transform: translateX(4%);
            }

            100% {
                transform: translateX(-4%);
            }
        }

        .carousel:hover {
            animation-play-state: paused;
        }

        .carousel2:hover {
            animation-play-state: paused;
        }
    </style>
</head>

<body class="" x-data="{
    cards: [{
            title: 'PHP',
            deskripsi: 'Back-End Development',
            'img': 'https://img.icons8.com/officel/84/null/php-logo.png'
        },
        {
            title: 'Laravel',
            deskripsi: 'Back-End Development',
            'img': 'https://buildwithangga.com/themes/front/images/logo/laravel.svg'
        },
        {
            title: 'Laravel Livewire',
            deskripsi: 'Full-Stack Laravel',
            'img': 'https://laracasts.com/images/topics/icons/livewire-logo.svg'
        },
        {
            title: 'Git',
            deskripsi: 'Version Control',
            'img': 'https://laracasts.com/images/topics/icons/git-logo.svg'
        },
    ],
    cards2: [{
            title: 'MySQL',
            deskripsi: 'Database',
            'img': 'https://laracasts.com/images/topics/icons/mysql-logo.svg'
        },
        {
            title: 'Alpine JS',
            deskripsi: 'Front-End Development',
            'img': 'https://laracasts.com/images/topics/icons/alpine-logo.svg'
        },
        {
            title: 'React JS',
            deskripsi: 'Front-End Development',
            'img': 'https://laracasts.com/images/topics/icons/react-logo.svg'
        },
        {
            title: 'Inertia',
            deskripsi: 'Front-End Development',
            'img': 'https://laracasts.com/images/topics/icons/inertia-logo.svg'
        },
    ]

}">


    <nav class="">
        <div class="max-w-7xl mx-auto px-2 xs:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center ">
                    <!-- Mobile menu button -->
                    <img class="h-16 lg:h-32 w-auto" src="/img/logo.png" alt="Workflow">

                </div>

                <div class="flex-1 flex items-center justify-center xs:items-stretch xs:justify-start">
                    <div class="flex-shrink-0">
                        <img class="h-16 lg:h-32 w-auto hilang" src="/img/logo.png" alt="Workflow">
                    </div>

                </div>
                <div class="flex items-center">
                    <button
                        class="p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </button>
                    <label class="swap">
                        <input type="checkbox" />
                        <div class="swap-off btn bg-[#F8E305] text-hitam">WebDev</div>
                        <div class="swap-on btn bg-primary text-dilogo">MusicProd</div>
                    </label>


                </div>
            </div>
        </div>
        </div>
        <div class="mobileMenu hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 ease-inn duration-300">
                <a href="#"
                    class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
            </div>
        </div>
    </nav>

    <section class="py-16">
        <div class="flex justify-center items-center gap-3 px-3">
            <a target="_blank" href="https://instagram.com/aldiiimf" class="">
                <img src="/img/ig1.png"/>
            </a>
            <a target="_blank" href="https://youtube.com/@ALdMFbeat" class="">
                <img src="/img/yt2.png"/>
            </a>
            <a target="_blank" href="https://github.com/aldmf26" class="">
                <img src="/img/github1.png"/>
            </a>
        </div>
        <div class="container flex items-center justify-center md:flex-row">
            <div class="lg:mx-28 text-center md:text-left">
                <div class="m-8 relative space-y-4">
                    <h2 class="lg:text-5xl text-3xl justify-center font-bold text-primary leading-tight mb-4"
                        x-intersect="$el.classList.add('fadeInUp')">Hi, I’m
                        FAhrizALdi</h2>
                    <p class="text-dilogo mb-8 text-2xl text-center" x-intersect="$el.classList.add('fadeInUp')">I Web
                        Developer and Music Producer</p>
                    <img src="/img/hero.png" alt="" class="" x-intersect="$el.classList.add('scale')">
                </div>
            </div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>
    <section class="py-10">
        <h1 class="text-center lg:text-2xl font-bold py-2" x-intersect="$el.classList.add('fadeInUp')">Technologies and
            tools I'm currently exploring<br> and interested about</h1>
        <hr class="my-5 mx-10 opacity-10 text-primary">
        <div class="mobileHilang">
            <div class="flex justify-center items-center gap-3 px-3">
                <template x-for="card in cards">
                    <div
                        class="bg-baju carousel_items dihover slide transition duration-200 transform hover:scale-105 hover:opacity-75 text-black rounded-lg shadow p-4 flex items-center">
                        <div class="w-auto rounded-full flex-shrink-0">
                            <img x-bind:src="card.img" class="imgCard"
                                x-intersect="$el.classList.add('scale')" />
                        </div>
                    </div>
                </template>

            </div>
            <div class="py-3 flex justify-center items-center gap-3 px-3">
                <template x-for="card in cards2">
                    <div
                        class="bg-baju carousel_items dihover slide transition duration-200 transform hover:scale-105 hover:opacity-75 text-black rounded-lg shadow p-4 flex items-center">
                        <div class="w-auto rounded-full flex-shrink-0">
                            <img x-bind:src="card.img" class="imgCard"
                                x-intersect="$el.classList.add('scale')" />
                        </div>
                    </div>
                </template>

            </div>
        </div>
        <div class="hilang">
            <div class="grid lg:grid-flow-col xs:grid-cols-3 gap-4 px-4 mt-2 carousel">
                <template x-for="card in cards">
                    <div
                        class="bg-baju carousel_items dihover slide transition duration-200 transform hover:scale-105 hover:opacity-75 text-black rounded-lg shadow p-4 flex items-center">
                        <div class="w-auto rounded-full flex-shrink-0">
                            <img x-bind:src="card.img" class="imgCard"
                                x-intersect="$el.classList.add('scale')" />
                        </div>
                        <div class="ml-4" x-intersect="$el.classList.add('fadeInUp')">
                            <h2 class="text-lg font-medium text-black-900"><span x-text="card.title"></span></h2>
                            <p x-text="card.deskripsi"></p>
                        </div>
                    </div>
                </template>

            </div>

            <div class="py-5 grid lg:grid-flow-col xs:grid-cols-3 gap-4 px-4 mt-2 carousel2">
                <template x-for="card in cards2">
                    <div
                        class="bg-baju carousel_items dihover slide transition duration-200 transform hover:scale-105 hover:opacity-75 text-black rounded-lg shadow p-4 flex items-center">
                        <div class="w-auto rounded-full flex-shrink-0">
                            <img x-bind:src="card.img" class="imgCard"
                                x-intersect="$el.classList.add('scale')" />
                        </div>
                        <div class="ml-4" x-intersect="$el.classList.add('fadeInUp')">
                            <h2 class="text-lg font-medium text-black-900"><span x-text="card.title"></span></h2>
                            <p x-text="card.deskripsi"></p>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </section>



    <script>
        const btntoggle = document.querySelector('.btnBurgerMobile')
        const mobileMenu = document.querySelector('.mobileMenu')

        btntoggle.addEventListener('click', () => mobileMenu.classList.toggle('hidden'))
    </script>

</body>

</html>
