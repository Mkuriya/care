@include('partials.userheader')
  <nav class="p-5 bg-purple-300 shadow md:flex md:items-center md:justify-between z-[1]">
    <div class="flex justify-between items-center  ">
      <span class="text-2xl pl-5 hover:text-red-800">
        <a href="/user/dashboard">Skinnology</a>
      </span>
      <span class="text-3xl cursor-pointer md:hidden block mx-2">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>
    <ul class="md:flex md:items-center z-[1] md:z-auto md:static 
    absolute bg-purple-300 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0 hover:text-red-800">
        <a href="/user/dashboard/chat" class="text-xl">Chat</a>
      </li>
      <li class="mx-4 my-6 md:my-0 hover:text-red-800">
        <a href="/user/dashboard/profile/{{auth()->guard('users')->user()->id}}" class="text-xl"> Profile</a>
      </li>
      <li class="mx-4 my-6 md:my-0 hover:text-red-800">
        <form action="/user/logout" method="POST">
          @csrf
          <button class="text-xl">Logout</button>
      </form>
      </li>
    </ul>
  </nav>

  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), 
      list.classList.add('opacity-100')) : (e.name ="menu",
      list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
  </script>
