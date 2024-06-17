<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-myColor-100 h-screen w-full">
        <div class="w-full">
            <div class="flex bg-white h-screen">
                <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                    <div>
                        <h1 class="py-5 text-5xl font-semibold text-gray-800 md:text-6xl">Skin<span class="text-blue-600">nology</span></h1>
                        
                    <p class="mt-2 text-sm text-gray-500 md:text-lg">Join us on an exciting adventure as we reveal the secrets to eternal beauty. Welcome to our skin care website, where the pursuit of radiant, flawless skin begins. Step into a realm where beauty meets science, where every skincare concern finds its solution.</p>
                        <div class="flex space-x-3 justify-center lg:justify-start mt-6">
                                <a href="/admin/login" class="bg-blue-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                    <span>Admin</span>
                                </a>
                                <a href="/doctor/login" class="bg-blue-300 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                        <span>Doctor </span>
                                    </a>
                        <a href="/user/login" class="bg-red-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                            <span>User</span>
                            </a>
            
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block lg:w-1/2" >
                    <div class="h-full object-cover" style="background-image: url(/img/background.jpg); background-repeat:no-repeat; background-size:cover;">
                        <div class="h-full bg-blue-500 opacity-50"></div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>