@layout('home.layout')
@section('content')
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('login') }}"><span>Login</span></a></li>

    </ul>
</div>
<div class="content">
    <div class="row1">

        @if(Session::has('success'))
        <?php $success = Session::get('success'); ?>

        <div class="alert alert-success" role="alert">
            <ul>
                <li>
<!--                    {{ $success }}-->
                    <p>You Are Logged Out!</p>
                </li>
            </ul>
        </div>
        @endif

    </div>
<div class="mainmenu">
        <h2 class="sidebar1">Main Menu</h2>
        <ul>
            <li><a href="{{ URL::to('description') }}">Isn’t technology wonderful..</a></li>
            <li><a href="{{ URL::to('description') }}">April left as a solar flare</a></li>
            <li><a href="{{ URL::to('description') }}">Never Say Never</a></li>
            <li><a href="{{ URL::to('description') }}">35: A Milestone Birthday</a></li>
            <li><a href="{{ URL::to('description') }}" Gettysburg’s "Oldest" Family</a></li>
            <li><a href="{{ URL::to('description') }}">The History of Harney</a></li>
            <li><a href="{{ URL::to('description') }}">Forest in the Winter</a></li>
            <li><a href="{{ URL::to('description') }}">Managing the Holiday Blues</a></li>
            <li><a href="{{ URL::to('description') }}">Dreams Come in Three Phase</a></li>
            <li><a href="{{ URL::to('description') }}">We Are Once in a Lifetime</a></li>
        </ul>
    </div>
</div>
@endsection