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
            <div class="w-96 absolute right-0 top-[70%]">
                <p class="text-white font-dmSans font-medium text-base text-right tracking-wide leading-relaxed">"Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis dolore accusantium omnis velit
                    corporis necessitatibus totam explicabo quasi obcaecati?"</p>
            </div>
            <div class="w-96 absolute left-0 top-[70%]">
                <p class="text-white font-dmSans font-medium text-base tracking-wide leading-relaxed">"Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Sequi debitis dolore accusantium omnis velit corporis
                    necessitatibus totam explicabo quasi obcaecati?"</p>
            </div>
        </div>
    </div>

    {{-- Second Section --}}
    <section class="w-full min-w-full h-full mt-24">
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
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}" alt="" />
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
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}" alt="" />
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
                                src="{{ asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg') }}" alt="" />
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
    </section>

    {{-- Third Section --}}
    <section>
        <div id="container">
            <span id="text1"></span>
            <span id="text2"></span>
        </div>

        <!-- The SVG filter used to create the merging effect -->
        <svg id="filters">
            <defs>
                <filter id="threshold">
                    <!-- Basically just a threshold effect - pixels with a high enough opacity are set to full opacity, and all other pixels are set to completely transparent. -->
                    <feColorMatrix in="SourceGraphic" type="matrix"
                        values="1 0 0 0 0
                                        0 1 0 0 0
                                        0 0 1 0 0
                                        0 0 0 255 -140" />
                </filter>
            </defs>
        </svg>
        <script>
            const elts = {
                text1: document.getElementById("text1"),
                text2: document.getElementById("text2")
            };
            // The strings to morph between. You can change these to anything you want!
            const texts = [
                "We Build",
                "A Place for",
                "Helping",
                "Good People",
                "Do",
                "Good Things"
            ];

            // Controls the speed of morphing.
            const morphTime = 1;
            const cooldownTime = 1.5;

            let textIndex = texts.length - 1;
            let time = new Date();
            let morph = 0;
            let cooldown = cooldownTime;

            elts.text1.textContent = texts[textIndex % texts.length];
            elts.text2.textContent = texts[(textIndex + 1) % texts.length];

            function doMorph() {
                morph -= cooldown;
                cooldown = 0;

                let fraction = morph / morphTime;

                if (fraction > 1) {
                    cooldown = cooldownTime;
                    fraction = 1;
                }

                setMorph(fraction);
            }

            // A lot of the magic happens here, this is what applies the blur filter to the text.
            function setMorph(fraction) {
                // fraction = Math.cos(fraction * Math.PI) / -2 + .5;

                elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
                elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

                fraction = 1 - fraction;
                elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
                elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

                elts.text1.textContent = texts[textIndex % texts.length];
                elts.text2.textContent = texts[(textIndex + 1) % texts.length];
            }

            function doCooldown() {
                morph = 0;

                elts.text2.style.filter = "";
                elts.text2.style.opacity = "100%";

                elts.text1.style.filter = "";
                elts.text1.style.opacity = "0%";
            }

            // Animation loop, which is called every frame.
            function animate() {
                requestAnimationFrame(animate);

                let newTime = new Date();
                let shouldIncrementIndex = cooldown > 0;
                let dt = (newTime - time) / 1000;
                time = newTime;

                cooldown -= dt;

                if (cooldown <= 0) {
                    if (shouldIncrementIndex) {
                        textIndex++;
                    }

                    doMorph();
                } else {
                    doCooldown();
                }
            }

            // Start the animation.
            animate();
        </script>
    </section>

    {{-- Footer --}}
    <div class="relative -z-[500]">
        <div class="w-full h-14 bg-[#1a1a1a] absolute fixed-bottom skew-y-6"></div>
        <div class="w-full h-14 bg-[#1a1a1a] absolute fixed-bottom -skew-y-6"></div>
    </div>
    @livewireStyles
</body>

</html>
