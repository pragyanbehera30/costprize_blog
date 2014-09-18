@layout('home.layout')
@section('content')
<style>
    .mainmenu, .contact {
        width: 310px;
        float: right;
        margin-top: -200px;
    }
    .row1 {
        width: 621px;
        float: left;
        margin-left: 70px;
        margin-top: 70px;
    }
</style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('index') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('login') }}"><span>Login</span></a></li>
    </ul>
</div>
<div class="content">
<!--    <div class="content-left">-->
        <div class="row1">
            @if (Auth::guest())
            @if(Session::has('errors'))
            <?php $errors = Session::get('errors');
            ?>
            <div class="alert alert-danger" role="alert">
                <p class="alert">Username or password incorrect.</p>
            </div>
            @endif
            @if(Session::has('success'))
            <?php $success = Session::get('success'); ?>

            <div class="alert alert-success" role="alert">
                <ul>
                    <li>
                        {{ $success }}
                    </li>
                </ul>
            </div>
            @endif
            <form class="form-horizontal" role="form" method="post"
                  action="{{ URL::to('login') }}">
                <div class="form-group">
                    <label for="AI_Username" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="AI_Password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </div>
            </form>
            @else
            <!--                --><?php //echo 'Welcome, ' . Auth::user()->username ?>
            <!--                {{ Form::open('logout') }}-->
            <!--                {{ Form::submit('Logout', array('Class' => 'btn btn-primary')) }}-->
            <!--                {{ Form::close() }}-->
            <!--                --><?php //$AI_Role = Auth::user()->role ?>
            <!--                @if( $AI_Role == 1)-->
            <!--                <a href="{{ URL::to('admin') }}">Admin Panel</a>-->
            <!--                @endif-->
            @endif
        </div>
<!--    </div>-->
<!--    <div class="content-right">-->
        <div class="mainmenu">
            <h2 class="sidebar1">Main Menu</h2>
            <ul>
                <li><a href="{{ URL::to('description') }}">Isn’t technology wonderful..</a></li>
                <li><a href="#">Article2</a></li>
                <li><a href="#">Article3</a></li>
                <li><a href="#">Article4</a></li>
                <li><a href="#">Article5</a></li>
                <li><a href="#">Article6</a></li>
                <li><a href="#">Article7</a></li>
                <li><a href="#">Article8</a></li>
                <li><a href="#">Article9</a></li>
                <li><a href="#">Article10</a></li>
            </ul>
        </div>
    <!--</div>-->
</div>
@endsection