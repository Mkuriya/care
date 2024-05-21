
@include('partials.doctornav')

<div class="px-10 py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 ">
       @foreach ($items as $post)
       <a href="/doctor/dashboard/view/{{$post->id}}"  
            class="flex flex-col  bg-white drop-shadow hover:drop-shadow-lg hover:opacity-70 rounded-md w-full h-96 border-4 border-myColor-800">
            <img src="{{asset($post->photo)}}" alt="" class="h-5/6 object-cover">
            <div class="px-3 pt-6 text-center">
                <h1 class="font-semibold">{{$post->productname}}</h1>
            </div>
        </a>
        @endforeach
    </div>
</div>


@include('partials.footer')
  
