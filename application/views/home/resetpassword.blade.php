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

    .content {
        background-color: #FFFFFF;
        background-image: url(http://localhost/costprize_blog/public/img/body-top.jpg);
        background-repeat: no-repeat;
        background-position: left top;
        width: 952px;
        float: left;
        padding: 30px 24px 0px 24px;
        margin-left: 180px;

    }

    .topmenu {
        background-image: url(http://localhost/costprize_blog/public/img/menu-bg.jpg);
        background-repeat: no-repeat;
        background-position: left top;
        width: 1000px;
        height: 74px;
        float: left;
        margin-left: 155px;

    }
    .alert{
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-left: 15px;
        width: 75%;
        margin-top: -60px;
    }
</style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('login') }}"><span>Login</span></a></li>
        <li><a href="{{ URL::to('resetpassword') }}"><span>Reset Password</span></a></li>
    </ul>
</div>
<div class="content">
    <div class="row1">

        @if(Session::has('errors'))
        <?php $errors = Session::get('errors');
        ?>
        <div class="alert alert-danger" role="alert">

            <ul>
                <li>
                    {{ $errors }}
                </li>
            </ul>
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
              action="{{ URL::to('resetpassword') }}">
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username"/>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Login</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </div>
            </div>
        </form>
        @endif
    </div>
<!--    <div class="mainmenu">-->
<!--        <h2 class="sidebar1">Main Menu</h2>-->
<!--        <ul>-->
<!--            <li><a href="{{ URL::to('description') }}">Isn’t technology wonderful..</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">April left as a solar flare</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">Never Say Never</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">35: A Milestone Birthday</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}" Gettysburg’s "Oldest" Family</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">The History of Harney</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">Forest in the Winter</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">Managing the Holiday Blues</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">Dreams Come in Three Phase</a></li>-->
<!--            <li><a href="{{ URL::to('description') }}">We Are Once in a Lifetime</a></li>-->
<!--        </ul>-->
<!--    </div>-->
</div>
@endsection