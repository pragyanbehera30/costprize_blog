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

    .alert {
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
        <li><a href="{{ URL::to('admin') }}"><span>Admin</span></a></li>
        <li><a href="{{ URL::to('resetpassword') }}"><span>Reset Password</span></a></li>
    </ul>
</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 column" style="margin: 40px 0 10px 40px">

            <ol>
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
            </ol>
<!--            <div class="container">-->
<!--            --><?php //echo 'Hey! ' . Auth::User()->email; ?>
<!--            </div>-->
            <form action="{{ URL::to('resetpassword') }}" method="POST" class="form-horizontal" role="form">
                <input type="hidden" class="form-control" name="id" value="{{$id  }}"/>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name="old_password"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name="password"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name="password_confirmation"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-info">Reset Password</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
@endsection