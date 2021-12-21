<header class="flex justify-between items-center py-10">
    <div>LOGO</div>
    <nav>
        <a href="#" class="mr-5 hover:text-green-500">Our Jobs</a>
        @guest 
            <a href="{{route('login')}}" class="mr-5 hover:text-green-500">Login</a>
            <a href="{{route('register')}}" class="mr-5 hover:text-green-500">Register</a>
        @else
            <a href="{{route('register')}}" class="mr-5 hover:text-green-500">Board table</a>
            <a href="{{route('logout')}}" class="mr-5 hover:text-green-500" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">@csrf</form>
        @endguest
    </nav>
</header>