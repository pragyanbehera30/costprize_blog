@layout('home.layout')
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 column"  style="margin: 40px 0 10px 40px">
            <form action="register" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <label name="usertype"  for="inputPassword3" class="col-sm-2 control-label">Select Your Option</label>
                    <div class="col-sm-10">
                        <select>
                            <option value="admin">ADMIN</option>
                            <option value="user">USER</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
            </form>

        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
@endsection
