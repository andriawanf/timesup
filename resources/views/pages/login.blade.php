<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    @livewireStyles
</head>

<body class=" bg-MainBlackColor">
    <div class="p-5 w-full h-screen">
        <div class="border h-full rounded-3xl p-3 md:grid md:grid-cols-12 sm:flex sm:flex-col">
            <div class="col-span-6 w-full h-full bg-MainWhiteColor rounded-2xl px-20 py-10">
                <div class="px-12">
                    <h1 class="font-syne font-bold text-center text-3xl">Welcome Back Again!</h1>
                    <p class="font-dmSans font-medium text-center text-base mt-2">Welcome to Times Up, please put your
                        login credentials below to start using the app</p>
                </div>
                <div class="mt-10">
                    <div class="w-full grid grid-cols-2 justify-center items-center gap-6">
                        <button
                            class="w-full px-3 py-2 flex items-center justify-center bg-gray-200 hover:bg-MainBlackColor hover:text-MainWhiteColor rounded-xl">
                            <i class="bx bxl-apple text-3xl mr-2"></i>
                            <h1 class="font-syne font-bold text-base ">Facebook</h1>
                        </button>
                        <button
                            class="w-full px-3 py-2 flex items-center justify-center bg-gray-200 hover:bg-MainBlackColor rounded-xl hover:text-MainWhiteColor">
                            <i class="bx bxl-google text-3xl mr-2"></i>
                            <h1 class="font-syne font-bold text-base ">Google</h1>
                        </button>
                    </div>
                    <div class="mt-6 w-full grid grid-cols-3 justify-center items-center">
                        <div class="w-full h-0.5 bg-MainBlackColor rounded-full bg-opacity-20"></div>
                        <h1 class="text-center font-dmSans font-medium text-base text-MainBlackColor text-opacity-40">OR
                        </h1>
                        <div class="w-full h-0.5 bg-MainBlackColor rounded-full bg-opacity-20"></div>
                    </div>
                </div>
                <div class="mt-6">
                    <form action="">
                        <div class="mb-6">
                            <label for="email" class="font-dmSans text-lg font-medium block mb-2">Email</label>
                            <input type="email" name="emailUser" id="email-user" placeholder="Your Email"
                                class="w-full px-3 py-2 placeholder-slate-500 bg-gray-50 border border-MainBlackColor rounded-xl">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="font-dmSans text-lg font-medium block mb-2">Password</label>
                            <input type="email" name="emailUser" id="email-user" placeholder="Your Password"
                                class="w-full px-3 py-2 placeholder-slate-500 bg-gray-50 border border-MainBlackColor rounded-xl">
                        </div>
                        <div class="flex items-center w-1/3 mt-6">
                            <input type="radio" name="remember"
                                class="w-5 h-5 border border-MainBlackColor accent-MainBlackColor rounded-sm outline-none cursor-pointer" />
                            <label class="ml-2 text-base font-dmSans font-reguler" for="email">Remember me</label>
                        </div>
                    </form>
                </div>
                <div class="mt-10">
                    <button
                        class="mb-6 px-3 py-2 bg-MainBlackColor w-full rounded-xl font-dmSans font-semibold text-lg text-MainWhiteColor">Login</button>
                    <h1 class="text-center font-dmSans font-medium text-base text-gray-500 ">Don't have an account?
                        <span class="text-MainBlackColor"><a href="#">Register here!</a></span> </h1>
                </div>
            </div>
            <div class="col-span-6 w-full h-full px-20 py-10">
                <div class="relative my-8">
                    <h1 class="w-full text-center font-syne font-semibold text-white text-4xl leading-relaxed mb-10">"The time is always right <br> to do what is right"</h1>
                    <div class="clock w-96 h-96 mx-auto">
                        <div class="hour"></div>
                        <div class="min"></div>
                        <div class="sec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deg = 6;
        const hour = document.querySelector(".hour");
        const min = document.querySelector(".min");
        const sec = document.querySelector(".sec");

        const setClock = () => {
            let day = new Date();
            let hh = day.getHours() * 30;
            let mm = day.getMinutes() * deg;
            let ss = day.getSeconds() * deg;

            hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
            min.style.transform = `rotateZ(${mm}deg)`;
            sec.style.transform = `rotateZ(${ss}deg)`;
        };

        // first time
        setClock();
        // Update every 1000 ms
        setInterval(setClock, 1000);
    </script>
    @livewireStyles
</body>

</html>
