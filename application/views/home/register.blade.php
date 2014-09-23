@layout('home.layout')
@section('content')
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('register') }}"><span>Register</span></a></li>

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
                        @foreach($errors as $error)
                        <li>{{ $error }}</li>
                        @endforeach
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
            <!--            </div>-->
            <form action="registeruser" method="POST" class="form-horizontal" role="form" name="frm">
                <!--                <div class="form-group">-->
                <!--                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>-->
                <!--                    <div class="col-sm-10">-->
                <!--                        <input class="form-control" id="inputEmail3" type="text" name="username"/>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" name="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name="password"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Confirm-Password</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name="cnmpwd"/>
                    </div>
                </div>
                <!--                <div class="form-group">-->
                <!--                    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>-->
                <!--                    <div class="col-sm-10">-->
                <!--                        <input class="form-control" id="inputPassword3" type="text" name="phone"/>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <label name="usertype"  for="inputPassword3" class="col-sm-2 control-label">Select User Type</label>-->
                <!--                    <div class="col-sm-10">-->
                <!--                        <select class="form-control" name="usertype">-->
                <!--                            <option value="admin">ADMIN</option>-->
                <!--                            <option value="user">USER</option>-->
                <!--                        </select>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <!--                        <button type="submit" class="btn btn-default">Sign in</button>-->
                        <input type="submit" class="btn btn-default" value="Sign in" onSubmit="return confirm_pwd();"/>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
<script>
    function confirm_pwd() {
        alert('hh');
        $pwd = document.frm.getElementsByName('password');
        $cnmpwd = document.frm.getElementsByName('cnmpwd');
        console.log($pwd);
//        if ($pwd == $cnmpwd)
//            return true;
//        else
//            return false;

    }
</script>
@endsection
