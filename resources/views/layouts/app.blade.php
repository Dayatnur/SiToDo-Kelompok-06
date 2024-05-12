<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiToDo</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="flex items-center justify-center h-20">
                <img src="img/foto.png" alt="Logo" class="h-12">
                <span class="ml-2 text-lg font-bold">SiTodo</span>
            </div>
            <ul class="mt-6 space-y-2">
                <li>
                    <a href="{{ route('beranda') }}" class="sidebar-link flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-7-7v18"></path>
                        </svg>
                        <span class="text-base font-medium">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('daftar-tugas') }}" class="sidebar-link flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        <span class="text-base font-medium">Daftar Tugas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengaturan') }}" class="sidebar-link flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span class="text-base font-medium">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('keluar') }}" class="sidebar-link flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="text-base font-medium">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div class="flex flex-col flex-1">
            <!-- Header -->
            <header class="h-20 bg-gray-800 text-white flex items-center justify-end px-5">
                <div class="flex items-center space-x-4">
                    <div class="flex flex-col items-end">
                        <div class="text-md font-medium">Unknow Unknow</div>
                        <div class="text-sm font-regular">Student</div>
                    </div>
                    <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div>
                </div>
            </header>
            <!-- Main Content -->
            <main id="main-content" class="flex-1 p-5">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
