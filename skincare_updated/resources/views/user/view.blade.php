@include('partials.usernav')

<section class="max-w-5xl p-6 mx-auto bg-purple-400 rounded-md shadow-md dark:bg-myColor-700 mt-4">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">View Product Description</h1>
    <hr>
    
    <div class="grid mt-4 sm:grid-cols-2">
        <div class="mt-1 flex justify-center px-1 w-96 pt-4 pb-4 border-2 border-gray-300 border-dashed rounded-md ">
            <div class="flex flex-col  bg-white drop-shadow hover:drop-shadow-lg hover:opacity-70 rounded-md w-full h-96 border-4 border-myColor-800">
                <img src="{{asset($items->photo)}}" alt="" class="h-full object-cover">
            </div>
        </div>
        <div class="gap-4 sm:grid-cols-3">
            <div>
                <label class="text-white " for="username">Product Name</label>
                <input readonly value="{{$items->productname}}" name="productname" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div>
                <label class="text-white " for="skintype">Skin Type</label>
                <input readonly value="{{$items->skintype}}" name="skintype" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            <div>
                <label class="text-white " for="applyzone">Apply Zone</label>
                <input readonly value="{{$items->applyzone}}" name="applyzone" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            <div>
                <label class="text-white " for="how to use">How to use</label>
                <textarea readonly name="use" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">{{$items->use}}</textarea>
            </div>
            <div>
                <label class="text-white " for="effects">Effects</label>
                <textarea readonly type="textarea" name="effects" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">{{$items->effects}}</textarea>
            </div>
        </div>
       
    </div>
    
</section>
