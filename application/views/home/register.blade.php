@layout('home.layout')
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 column"  style="margin: 40px 0 10px 40px">
<!--            <div class="alert alert-danger" role="alert">-->
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
            <form action="registeruser" method="POST" class="form-horizontal" role="form">
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
                        <input type="submit" class="btn btn-default" value="Sign in"/>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
@endsection
