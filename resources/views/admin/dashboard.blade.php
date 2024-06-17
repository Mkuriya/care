@include('partials.adminheader')

<div class="">
    <div class="p-4  rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-3 gap-4 mb-4">
          
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total Program</h5>
            </a>
            <p class="mb-3 text-4xl font-normal text-gray-500 dark:text-gray-400">{{$totalProgram}}</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">View</a>
        </div>
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total Doctor Account</h5>
            </a>
            <p class="mb-3 text-4xl font-normal text-gray-500 dark:text-gray-400">{{$totalDoctor}}</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">View</a>
        </div>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total User Account</h5>
                </a>
                <p class="mb-3 text-4xl font-normal text-gray-500 dark:text-gray-400">{{$totalUser}}</p>
                <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">View</a>
            </div>
       </div>
    </div>
</div>








</body>
</html>