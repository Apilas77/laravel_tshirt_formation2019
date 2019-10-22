@auth
<span class="badge badge-primary">Bienvenue {{Auth::user()->name}}</span>
<a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    Logout <i style="color: red" class="fa fa-sign-out-alt"></i>
</a>
<form action="{{route('logout')}}" id="logout-form" method="post" style="display: none">
    @csrf
</form>
@endauth
