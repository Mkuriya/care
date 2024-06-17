
@include('partials.doctornav')

<section class="max-w-5xl p-6 mx-auto bg-purple-400 rounded-md shadow-md dark:bg-myColor-700 mt-4">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Treatment Description</h1>
    <hr>
    <form action="/doctor/dashboard/editprocess/{{$programs->id}}" method="POST">
        
        @csrf
        @method('PUT')   
    <div class="grid mt-4 sm:grid-cols-2">
        <div class="mt-1 flex justify-center px-6 w-96 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">
            <div class="flex flex-col  bg-white drop-shadow hover:drop-shadow-lg hover:opacity-70 rounded-md w-full h-96 border-4 border-myColor-800">
                <img src="{{asset($programs->photo)}}" alt="" class="h-full object-cover">
            </div>
        </div>
        <div class="gap-4 sm:grid-cols-3">
            <div>
                <label class="text-white  " for="username">Product Name</label>
                <input  value="{{$programs->treatmentsname}}" name="treatmentsname" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div class="mt-3">
                <label class="text-white " for="possibletreatment">Possible Treatment</label>
                <input  value="{{$programs->possibletreatment}}" name="possibletreatment" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            <div class="mt-3">
                <label class="text-white " for="recomendation">Recommendation</label>
                <input  value="{{$programs->recomendation}}" name="recomendation" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            
            
        </div>
       
    </div>
    <div class="gap-4 sm:grid-cols-2 grid mt-4">
                <a href="">
                    <button class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md 
                    dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">Update</button>
                </a> </form>
                <form action="/doctor/dashboard/delete/{{$programs->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md 
                dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 
                focus:border-black dark:focus:border-black ">Delete</button>
                </form>
            </div>
          
</section>

@include('partials.footer')
  
