<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo list</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-MainBlackColor">
    <div class="flex justify-between items-center px-9 py-6" id="tab-buttons">
        <div>
            <a href="javascript:void(0)" onclick="changeTab(event, 0)">
                <h1 class="font-syne font-extrabold text-3xl text-white">TU</h1>
            </a>
        </div>
        <div class="nav backdrop-blur-md font-dmSans font-medium relative">
            <a href="/todo" class="nav__item">
                <button class="button-nav">
                    <ion-icon name="grid" class="icon"></ion-icon>
                    <span class="text" data-title="Dashboard">Dashboard</span>
                </button>
            </a>
            <a href="/to-do-list" class="nav__item">
                <button class="active button-nav">
                    <ion-icon name="create" class="icon"></ion-icon>
                    <span class="text" data-title="To-Do List">To-Do</span>
                </button>
            </a>
            <div class="nav__item">
                <button class="button-nav">
                    <ion-icon name="document-text" class="icon"></ion-icon>
                    <span class="text" data-title="Notes">Notes</span>
                </button>
            </div>
            <div class="nav__item">
                <button class="button-nav">
                    <ion-icon name="calendar-number" class="icon"></ion-icon>
                    <span class="text" data-title="Calendar">Calendar</span>
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
    <div class="px-9 translate-y-4">
        <div class="space-y-2">
            <h1 class="text-5xl text-white text-center font-syne font-bold w-full">Create Your Activity</h1>
            <p class="text-xl text-gray-500 text-center font-dmSans font-bold w-full">Manage your activity for good productivity</p>
        </div>
        <div class="grid grid-cols-12 justify-between items-start gap-6 w-full pt-10">
            <div class="col-span-10 flex gap-6 ">
                <div class="w-full space-y-2">
                    <label for="titleTask" class="text-xl text-white font-syne font-semibold">Title Task</label>
                    <input type="text" name="task" id="task" class="w-full h-fit px-6 py-4 rounded-full placeholder:text-gray-500 text-base font-dmSans font-reguler" placeholder="Type title task here...">
                </div>
                <div class="w-full space-y-2">
                    <label for="titleTask" class="text-xl text-white font-syne font-semibold">Description Task</label>
                    <textarea name="descTask" id="descTask" cols="100" rows="1" class="px-6 py-4 rounded-[3rem] placeholder:text-gray-500 text-base font-dmSans font-reguler" placeholder="Type description task here..."></textarea>
                </div>
            </div>
            <div class="col-span-2 space-y-2">
                <label for="titleTask" class="text-xl font-syne font-semibold">Description Task</label>
                <div class="flex justify-between items-center w-full">
                    <button class="p-2 bg-white rounded-xl">
                        <ion-icon name="calendar" size="large" class=""></ion-icon>
                    </button>
                    <button class="p-2 bg-white rounded-xl">
                        <ion-icon name="attach" size="large" class=""></ion-icon>
                    </button>
                    <button class="p-2 bg-white rounded-xl flex gap-2 items-center">
                        <ion-icon name="paper-plane" size="large" class=""></ion-icon>
                        <h1 class="font-dmSans font-medium text-base">Create</h1>
                    </button>
                </div>
            </div>
        </div>
        <div class="my-9">
            <label for="taskList" class="text-4xl text-white font-dmSans font-semibold">Your Task</label>
            <div class="grid grid-cols-4 gap-4 w-full border mt-6 p-6 rounded-[3rem] ">
                <div class="relative rounded-3xl p-4 bg-white flex flex-col w-full min-h-[440px] h-fit">
                    <img src="{{asset('images/joanna-nix-walkup-tt2Wi_vCXxA-unsplash.jpg')}}" alt="" class="object-cover w-full h-40 rounded-xl">
                    <div class="mt-4">
                        <h1 for="taskTitle" class="text-lg w-full font-syne font-bold truncate">Tugas Akhir 1 - Latar Belakang dan rumusan masalah</h1>
                        <h1 class="text-sm font-dmSans font-normal text-justify mt-2 line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laudantium cumque est repudiandae earum enim vel facere distinctio? Doloremque quia ut obcaecati sit voluptas nulla dolorum maxime repellendus doloribus tempora veritatis totam et, laudantium porro a fuga dignissimos quos itaque unde voluptates. Asperiores ipsam eligendi officia quisquam, ratione perspiciatis nihil porro nemo sequi autem numquam dolore illum fuga, distinctio est odio dolor adipisci sit similique quia harum, saepe quo nisi maxime. Aspernatur, eveniet, aliquam voluptate earum nostrum nobis dolore nesciunt, delectus consequatur vel alias. Error sunt qui quidem explicabo autem optio reprehenderit, atque veniam, recusandae, aliquid aperiam dignissimos earum tenetur?</h1>
                        <p class="text-sm font-dmSans font-semibold text-justify mt-2 truncate" id="dateCardTask">Sunday, Des 04 2022 - Monday, Des 05 2022</p>
                    </div>
                    <div class="flex gap-4 absolute inset-x-4 bottom-4">
                        <button class="w-full py-2.5 bg-red-700 hover:bg-transparent hover:border hover:border-red-700 hover:text-red-700 transition-all duration-200 rounded-xl text-base font-dmSans font-medium text-white ">Finish</button>
                        <button class="w-full py-2.5 border border-MainBlackColor hover:bg-MainBlackColor hover:text-white transition-all duration-200 rounded-xl text-base font-dmSans font-medium text-MainBlackColor ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
</body>
</html>