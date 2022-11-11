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

<body class=" bg-MainBlackColor">
    <div class="px-9 pt-9 w-full h-screen">
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
                    <i class="bx bxs-user text-MainWhiteColor bx-sm mr-8"></i>
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
            <div class="w-96 absolute z-[500] right-0 top-[70%]">
                <p class="text-white font-dmSans font-medium text-base text-right tracking-wide leading-relaxed">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis dolore accusantium omnis velit corporis necessitatibus totam explicabo quasi obcaecati?"</p>
            </div>
            <div class="w-96 absolute z-[500] left-0 top-[70%]">
                <p class="text-white font-dmSans font-medium text-base tracking-wide leading-relaxed">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis dolore accusantium omnis velit corporis necessitatibus totam explicabo quasi obcaecati?"</p>
            </div>
        </div>
    </div>
    <div class="w-full min-w-full h-full mt-24">
        <h1 class="w-full text-center text-5xl font-syne font-semibold text-MainWhiteColor text-animation">Products
            We Provide</h1>
        <ul class="cards my-[5rem] mx-[8rem]">
            <li>
                <a href="" class="card">
                    <img src="{{ asset('images/kama-tulkibayeva-5C2gvN9JTnQ-unsplash.jpg') }}" class="card__image"
                        alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <img class="w-12 h-12 flex-shrink-0 object-cover rounded-full"
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="font-dmSans text-base ">Jessica Parker</h3>
                                <span class="font-dmSans text-sm text-MainPurpleColor">1 hour ago</span>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="{{ asset('images/kama-tulkibayeva-5C2gvN9JTnQ-unsplash.jpg') }}" class="card__image"
                        alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <img class="w-12 h-12 flex-shrink-0 object-cover rounded-full"
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="font-dmSans text-base ">Jessica Parker</h3>
                                <span class="font-dmSans text-sm text-MainPurpleColor">1 hour ago</span>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="{{ asset('images/kama-tulkibayeva-5C2gvN9JTnQ-unsplash.jpg') }}" class="card__image"
                        alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <img class="w-12 h-12 flex-shrink-0 object-cover rounded-full"
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}"
                                alt="" />
                            <div class="card__header-text">
                                <h3 class="font-dmSans text-base ">Jessica Parker</h3>
                                <span class="font-dmSans text-sm text-MainPurpleColor">1 hour ago</span>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores, blanditiis?</p>
                    </div>
                </a>
            </li>
        </ul>
        <script>
            var wrapper = document.getElementsByClassName("text-animation")[0];
            wrapper.style.opacity = "1";
            wrapper.innerHTML = wrapper.textContent.replace(/./g, "<span>$&</span>");

            var spans = wrapper.getElementsByTagName("span");

            for (var i = 0; i < spans.length; i++) {
                spans[i].style.animationDelay = i * 80 + "ms";
            }
        </script>
    </div>
    @livewireStyles
</body>

</html>
