@include('partials.usernav')

<section class="max-w-5xl p-6 mx-auto bg-purple-400 rounded-md shadow-md dark:bg-myColor-700 mt-4">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Profile</h1>
    <form action="/user/dashboard/profile/{{$users->id}}" method="POST">
        
        @csrf
        @method('PUT')   
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white " for="lastname">First Name</label>
                <input value="{{$users->firstname}}" name="firstname" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div>
                <label class="text-white " for="lastname">Last Name</label>
                <input value="{{$users->lastname}}" name="lastname" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div>
                <label class="text-white " for="email">Email</label>
                <input value="{{$users->email}}" name="email" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div>
                <label class="text-white " for="password">Password</label>
                <input name="password" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 
            rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Update</button>
        </div>
    </form>
</section>