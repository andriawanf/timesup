<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    @livewireStyles
</head>

<body>
    <div class="px-9 pt-9 w-full h-screen bg-MainBlackColor">
        <div class="max-w-full w-full h-screen relative mx-auto">
            {{-- Navbar --}}
            <div class="w-full h-[2rem] inline-block">
                <label>
                    <input type="checkbox" />
                    <span class="menu">
                        <span class="hamburger"></span>
                    </span>
                    <nav role="navigation">
                        <ul>
                            <li>
                                <h1 class="text-6xl font-syne font-bold"><a href="#">Home</a></h1>
                            </li>
                            <li>
                                <h1 class="text-6xl font-syne font-bold"><a href="">Create To-do</a></h1>
                            </li>
                            <li>
                                <h1 class="text-6xl font-syne font-bold"><a href="#">Profile</a></h1>
                            </li>
                            <li>
                                <h1 class="text-6xl font-syne font-bold"><a href="#">About</a></h1>
                            </li>
                        </ul>
                    </nav>
                </label>
                {{-- <div class="float-right">
                    <i class="bx bxs-category text-MainBlackColor bx-sm bg-MainWhiteColor p-3 rounded-full cursor-pointer"></i>
                </div> --}}
                <div class="float-left px-4 py-3 inline-flex border rounded-full">
                    <i class="bx bxs-user text-MainWhiteColor bx-sm mr-5"></i>
                    <i class="bx bxs-bell text-SecondWhiteColor bx-sm"></i>
                </div>
            </div>

            {{-- Landing Page --}}
            <div class="ellipse-container">
                <h2 class="logo-times text-center text-9xl font-syne font-extrabold text-SecondWhiteColor">TIMES</h2>
                <h2 class="logo-up text-center text-9xl font-syne font-extrabold text-SecondWhiteColor">UP</h2>

                <div class="ellipse ellipse__outer--thin">
                    <div class="ellipse ellipse__orbit">
                    </div>
                </div>
                <div class="ellipse ellipse__outer--thick">
                </div>
            </div>
        </div>
    </div>
    
    @livewireStyles
</body>

</html>
