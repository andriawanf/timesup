<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .button-nav {
            padding: 0;
            border: 0;
            display: flex;
            align-items: center;
            cursor: pointer;
            width: var(--icon-width);
            transition: width 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
            /* I knowwww, don't animate width, but it doesn't actually look jittery in this case - so maybe it just works in this case? If not there are alternatives we can try */
            outline: none;
            position: relative;
            background: transparent;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-MainBlackColor">
    <div class="flex justify-between items-center px-9 py-6">
        <div>
            <a href="#">
                <h1 class="font-syne font-extrabold text-3xl text-white">TU</h1>
            </a>
        </div>
        <div class="nav backdrop-blur-md font-dmSans font-medium ">
            <div class="nav__item">
                <button class="active button-nav">
                    <ion-icon name="grid" class="icon"></ion-icon>
                    <span class="text" data-title="Dashboard">Dashboard</span>
                </button>
            </div>
            <div class="nav__item">
                <button class="button-nav">
                    <ion-icon name="create" class="icon"></ion-icon>
                    <span class="text" data-title="To-Do">To-Do</span>
                </button>
            </div>
            <div class="nav__item">
                <button class="button-nav">
                    <ion-icon name="document-text" class="icon"></ion-icon>
                    <span class="text" data-title="Notes">Notes</span>
                </button>
            </div>
            <div class="nav__item">
                <button class="button-nav">
                    <ion-icon name="calendar-number" class="icon"></ion-icon>
                    <span class="text" data-title="Calender">Calender</span>
                </button>
            </div>
            <div class="nav__active-indicator"></div>
        </div>
        <div class="flex justify-center items-center ">
            <div class="relative">
                <ion-icon name="notifications-outline" class="icon cursor-pointer"></ion-icon>
            </div>
            <div class="relative ml-4">
                @if (Auth::check())
                    <button class="peer text-white text-base font-dmSans">{{ Auth::user()->name }}</button>
                @endif
                <!-- the menu here -->
                <div
                    class="hidden peer-hover:flex hover:flex flex-col p-4 bg-white rounded-3xl rounded-tr-none drop-shadow-lg absolute w-[150px] font-dmSans font-semibold text-base space-y-4">
                    <a class=" w-full text-center" href="#">Account</a>
                    <a class=" w-full text-center" href="#">Contact Us</a>
                    <a class=" w-full text-center" href="#">Settings</a>
                </div>
            </div>
        </div>
    </div>

    <main class="px-9 translate-y-10">
        <div id="div1" class="text-white font-syne font-bold text-8xl text-center w-full">
            <p id="date" class="text-4xl ml-4"></p>
            <p id="time"></p>
        </div>
        <div class="grid grid-cols-4 gap-4 w-full mt-16">
            <div class="col-span-2 card w-full h-full border rounded-[3rem] px-6 py-4">
                <div class="flex w-full justify-between items-center">
                    <label class="text-white font-syne font-semibold text-2xl">Today To-Do List</label>
                    <a href="#">
                        <ion-icon name="add-circle" size="large" style="color:white"></ion-icon>
                    </a>
                </div>
                <div class="mt-6 w-full bg-white bg-opacity-5 rounded-3xl space-y-3">
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div class="flex items-center w-full space-x-2">
                            <input type="radio" name="remember"
                                class="w-5 h-5 border border-MainBlackColor accent-MainBlackColor rounded-sm outline-none cursor-pointer" />
                            <h1 class="text-lg font-dmSans font-medium text-white truncate w-96">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        </div>
                        <p id="taskDate" class="text-xs text-white font-dmSans font-medium block"></p>
                    </div>
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div class="flex items-center w-full space-x-2">
                            <input type="radio" name="remember"
                                class="w-5 h-5 border border-MainBlackColor accent-MainBlackColor rounded-sm outline-none cursor-pointer" />
                            <h1 class="text-lg font-dmSans font-medium text-white truncate w-96">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        </div>
                        <p id="taskDate" class="text-sm text-white font-dmSans font-medium block"></p>
                    </div>
                </div>
            </div>
            <div class="card w-full border rounded-[3rem] px-6 py-4">
                <div class="flex w-full justify-between items-center">
                    <label class="text-white font-syne font-semibold text-2xl">Notes</label>
                    <a href="#">
                        <ion-icon name="add-circle" size="large" style="color:white"></ion-icon>
                    </a>
                </div>
                <div class="mt-6 w-full bg-white bg-opacity-5 rounded-3xl space-y-3">
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div class="flex items-center w-full space-x-2">
                            <input type="radio" name="remember"
                                class="w-5 h-5 border border-MainBlackColor accent-MainBlackColor rounded-sm outline-none cursor-pointer" />
                            <h1 class="text-lg font-dmSans font-medium text-white truncate w-full">Mengerjakan tugas akhir 1</h1>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full px-4 py-2">
                        <div class="flex items-center w-full space-x-2">
                            <input type="radio" name="remember"
                                class="w-5 h-5 border border-MainBlackColor accent-MainBlackColor rounded-sm outline-none cursor-pointer" />
                            <h1 class="text-lg font-dmSans font-medium text-white truncate w-full">Bersih-bersih kost-an sampai bersih</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-full border rounded-[3rem] px-6 py-4">
                <div class="flex w-full justify-between items-center">
                    <label class="text-white font-syne font-semibold text-2xl">Events</label>
                    <a href="#">
                        <ion-icon name="add-circle" size="large" style="color:white"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- Add online jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script>
        // ---------
        // Variables
        // ---------

        const nav = document.querySelector(".nav");
        const navActiveIndicator = document.querySelector(".nav__active-indicator");
        const buttons = document.querySelectorAll("button");
        let activeButton = document.querySelector(".active");

        // ---
        // App
        // ---

        setIndexKey(buttons);

        buttons.forEach(button => {
            button.addEventListener("click", buttonClick);
        });

        // ---------
        // Functions
        // ---------

        function setIndexKey(arrayOfElements) {
            arrayOfElements.forEach((element, index) => {
                element.index = index;
            });
        }

        function buttonClick() {
            // Position the text so that it appears to not move with the button width growth
            if (this.index > activeButton.index) {
                nav.classList.remove("slide-right");
                nav.classList.add("slide-left");
            } else {
                nav.classList.remove("slide-left");
                nav.classList.add("slide-right");
            }

            // Animate the active indicator position
            const iconWidth = parseInt(
                getComputedStyle(document.documentElement).getPropertyValue("--icon-width")
            );
            const spaceBetweenIcons = parseInt(
                getComputedStyle(document.documentElement).getPropertyValue(
                    "--space-between-icons"
                )
            );
            navActiveIndicator.style.transform = `translateX(${(iconWidth +
    spaceBetweenIcons) *
    this.index}px) translateY(-50%)`;

            // Update the active button
            if (activeButton) activeButton.classList.remove("active");
            this.classList.add("active");
            activeButton = this;
        }
    </script>
    @livewireStyles
</body>

</html>
