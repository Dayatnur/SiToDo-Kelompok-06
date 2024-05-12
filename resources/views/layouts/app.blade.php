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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive mr-2" viewBox="0 0 16 16">
                         <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                     </svg>
                    <span class="text-base font-medium">Box</span>
                    </a>

                </li>
                <li>
                <a href="{{ route('daftar-tugas') }}" class="sidebar-link flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 mr-2" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                    <span class="text-base font-medium">Calendar</span>
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
