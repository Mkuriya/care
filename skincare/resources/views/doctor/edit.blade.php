
@include('partials.adminnav')

<section class="max-w-5xl p-6 mx-auto bg-purple-400 rounded-md shadow-md dark:bg-myColor-700 mt-4">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Edit Product Description</h1>
    <hr>
    <form action="/doctor/dashboard/editprocess/{{$items->id}}" method="POST" enctype="multipart/form-data" >
      
        @csrf
        @method('PUT')  
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3">
            <div>
                <label class="text-white " for="username">Product Name</label>
                <input value="{{$items->productname}}" name="productname" type="text" class="block w-full px-4 py-2 mt-2 text-red-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-white dark:border-myColor-200 focus:border-black dark:focus:border-black">
            </div>
            <div>
                <label class="text-white " for="skintype">Skin Type</label>
                <input value="{{$items->skintype}}" name="skintype" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            <div>
                <label class="text-white " for="applyzone">Apply Zone</label>
                <input value="{{$items->applyzone}}" name="applyzone" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">
            </div>
            <div>
                <label class="text-white " for="how to use">How to use</label>
                <textarea name="use" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">{{$items->use}}</textarea>
            </div>
            <div>
                <label class="text-white " for="effects">Effects</label>
                <textarea type="textarea" name="effects" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-myColor-200 rounded-md dark:bg-myColor-800 dark:text-gray-300 dark:border-myColor-200 focus:border-black dark:focus:border-black ">{{$items->effects}}</textarea>
            </div>
           {{-- <div>
                <label class="block text-sm font-medium text-white">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative w-48 cursor-pointer bg-white rounded-md font-medium text-black hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a photo</span>
                      <input id="file-upload" name="photo" type="file" class="sr-only">
                    </label>
                   
                  </div>
                  
                </div>
              </div>
            </div> --}}
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Update</button>
        </div>
    </form>
    
</section>

@include('partials.adminfooter')
  
