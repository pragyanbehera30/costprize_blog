<div class="container">
    <div class="row clearfix">
        <div id="login">
            <div class="col-md-12 column">
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
                <form class="form-horizontal" role="form" method="post" action="{{ URL::to('login') }}">
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
                <?php echo 'Welcome, ' . Auth::user()->username ?>
                {{ Form::open('logout') }}
                {{ Form::submit('Logout', array('Class' => 'btn btn-primary')) }}
                {{ Form::close() }}
                <?php $AI_Role = Auth::user()->role ?>
                @if( $AI_Role == 1)
                <a href="{{ URL::to('admin') }}">Admin Panel</a>
                @endif
                @endif
            </div>
        </div>
    </div>
</div>