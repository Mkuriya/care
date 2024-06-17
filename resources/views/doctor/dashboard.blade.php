
@include('partials.doctornav')

<div class="">
    <div class="p-4  rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-5 gap-4 mb-4">
          
          <div class="col-start-2 p-6 w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total Program</h5>
            </a>
            <p class="mb-3 text-4xl font-normal text-gray-500 dark:text-gray-400">{{$totalProgram}}</p>
            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">View</a>
            </div>
            <div class="col-start-4 w-64  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total Doctor Account</h5>
                </a>
                <p class="mb-3 text-4xl font-normal text-gray-500 dark:text-gray-400">{{$totalUser}}</p>
                <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">View</a>
            </div>
       </div>
    </div>
</div>
<div class="px-10 py-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 ">
       @foreach ($programs as $post)
       <a href="/user/dashboard/view/{{$post->id}}"  
            class="flex flex-col  bg-white drop-shadow hover:drop-shadow-lg hover:opacity-70 rounded-md w-full h-96 border-4 border-myColor-800">
            <img src="{{asset($post->photo)}}" alt="" class="h-5/6 object-cover">
            <div class="px-3 pt-6 text-center">
                <h1 class="font-semibold">{{$post->treatmentsname}}</h1>
            </div>
        </a>
        @endforeach
    </div>
  </div>

@include('partials.footer')
  