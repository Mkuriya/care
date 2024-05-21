@include('partials.adminheader')
<br>
<div class="flex flex-col justify-center  ">
  <div class="-mx-0 -my-2 overflow-x-auto sm:-mx-0  ">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
           <div class="overflow-hidden border border-purple-200 dark:border-purple-700 md:rounded-lg">
             <table class="min-w-full divide-y divide-purple-200 dark:divide-purple-700">
                   <thead class="bg-purple-50 dark:bg-purple-800">
                       <tr>
                           <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-black dark:text-white">
                               <div class="flex items-center gap-x-3">
                                   <button class="flex items-center gap-x-2">
                                       <span>Name</span>
                                   </button>
                               </div>
                           </th>
                           <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                               Email
                           </th>
                           <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                               Action
                           </th>
                       </tr>
                   </thead>
                   <tbody class="bg-white divide-y divide-purple-200 dark:divide-purple-700 dark:bg-purple-900">
                       @foreach ($doctors as $item)
                       <tr>
                           <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                               <div class="inline-flex items-center gap-x-3">
                               
                                   <span>{{$item->lastname}}, {{$item->firstname}} {{$item->middlename}}</span>
                               </div>
                           </td>
                           <td class="px-4 py-4 text-sm ext-gray-500 dark:text-gray-300 whitespace-nowrap">
                                   <h2 class="text-sm font-normal">{{$item->email}}</h2>
                           </td>
                           <td class="px-4 py-4 text-sm whitespace-nowrap">
                               <div class="inline-flex items-center gap-x-3">
                                   <form action="/admin/dashboard/doctor/delete/{{$item->id}}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       <button onclick="return confirm('Permanent Delete?');" class="text-red-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                           Delete
                                       </button>
                                   </form>
                               </div>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>
</body>
</html>