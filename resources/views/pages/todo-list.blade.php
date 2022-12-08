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

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

</head>

<body class="bg-MainBlackColor">
    <div class="flex justify-between items-center px-9 py-6" id="tab-buttons">
        <div>
            <a href="/homepage" onclick="changeTab(event, 0)">
                <h1 class="font-syne font-extrabold text-3xl text-white">TU</h1>
            </a>
        </div>
        <div class="nav backdrop-blur-md font-dmSans font-medium relative">
            <a href="/homepage" class="nav__item">
                <button class="button-nav">
                    <ion-icon name="grid" class="icon"></ion-icon>
                    <span class="text" data-title="Dashboard">Dashboard</span>
                </button>
            </a>
            <a href="/todo-list" class="nav__item">
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
            <p class="text-xl text-gray-500 text-center font-dmSans font-bold w-full">Manage your activity for good
                productivity</p>
        </div>
        <form action="{{ route('todo-list.store') }}" class="mt-10" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 gap-6">
                <div class="flex flex-col col-span-2">
                    <label for="task" class="text-xl text-white font-syne font-semibold">Title Task</label>
                    <input type="text" name="nama" id="nama"
                        class="w-full mt-2 rounded-full py-3 px-4 font-dmSans" placeholder="Write title task here ...">
                    @error('nama')
                        <div class="p-4 bg-red-500 rounded-xl text-white mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="flex flex-col mt-4">
                        <label for="description" class="text-xl text-white font-syne font-semibold">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                            class="rounded-3xl mt-2 py-3 px-4 font-dmSans focus:caret-black" placeholder="Write description task here ..."></textarea>
                        @error('description')
                            <div class="p-4 bg-red-500 rounded-xl text-white mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <label for="date" class="text-xl text-white font-syne font-semibold">Date Task</label>
                    <input type="date" name="date" id="date"
                        class="w-full mt-2 rounded-full py-3 px-4 font-dmSans">
                    @error('date')
                        <div class="p-4 bg-red-500 rounded-xl text-white mt-1 mb-1">{{ $message }}</div>
                    @enderror <div class="mt-4">
                        <h1 class="text-xl text-white font-syne font-semibold">Upload Image Task</h1>
                        <div class="flex items-center justify-center w-full mt-2">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full max-h-full h-64 border-2 border-gray-300 border-dashed rounded-3xl cursor-pointer bg-transparent relative"
                                id="image-preview">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <img src="#" alt=""
                                    class="object-cover h-60 absolute w-full px-2 rounded-3xl">
                                <input id="dropzone-file" accept="image/*" name="image" type="file"
                                    class="hidden w-full" />
                                @error('image')
                                    <div class="p-4 bg-red-500 rounded-xl text-white mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </label>
                            <script>
                                const imgInput = document.getElementById('dropzone-file')
                                const imgEl = document.querySelector('img')
                                imgInput.addEventListener('change', () => {
                                    if (imgInput.files && imgInput.files[0]) {
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            imgEl.src = e.target.result;
                                        }
                                        reader.readAsDataURL(imgInput.files[0]);
                                    }
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="w-full min-w-full mt-6 py-2.5 bg-transparent text-xl text-white font-syne font-semibold border rounded-full hover:bg-white hover:text-MainBlackColor transition duration-300 ease-out">Create
                Task</button>
        </form>
        <div class="my-9">
            <label for="taskList" class="text-4xl text-white font-dmSans font-semibold">Your Task</label>
            <div class="grid grid-cols-4 gap-4 w-full border mt-6 p-6 rounded-[3rem] ">
                @foreach ($todos as $todos)
                    <div class="relative rounded-3xl p-4 bg-white flex flex-col w-full min-h-[440px] h-fit">
                        <img src="{{  url('storage/images/'.$todos->image)  }}" alt=""
                            class="object-cover w-full h-40 rounded-xl">
                        <div class="mt-4">
                            <h1 for="taskTitle" class="text-lg w-full font-syne font-bold truncate">{{ $todos->nama }}</h1>
                            <h1 class="text-sm font-dmSans font-normal text-justify mt-2 line-clamp-5">{{ $todos->description }}</h1>
                            <p class="text-sm font-dmSans font-semibold text-justify mt-2 truncate" id="dateCardTask">{{ $todos->date }}</p>
                        </div>
                        <form action="{{ route('todo-list.destroy',$todos->id) }}" method="Post" class="flex gap-4 absolute inset-x-4 bottom-4">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="w-full py-2.5 bg-red-700 hover:bg-transparent hover:border hover:border-red-700 hover:text-red-700 transition-all duration-200 rounded-xl text-base font-dmSans font-medium text-white ">Delete</button>
                            <button class="w-full py-2.5 border border-MainBlackColor hover:bg-MainBlackColor hover:text-white transition-all duration-200 rounded-xl text-base font-dmSans font-medium text-MainBlackColor ">Edit</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
