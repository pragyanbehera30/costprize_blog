@layout('home.layout')
@section('content')
<style>
    .mainmenu, .contact {
        width: 310px;
        float: right;
        margin-top: -160px;
        margin-right: 163px;
    }
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-left: 120px;
        margin-top: -55px;
    }
 </style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
        <li><a href="{{ URL::to('logout') }}"><span>Logout</span></a></li>
        <li><a href="{{ URL::to('resetpassword') }}"><span>Reset Password</span></a></li>
    </ul>
</div>

<div class="row1">
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
</div>
<div class="row1">
    <img src="http://localhost/costprize_blog/public/img/Banner_6.jpg">
</div>
<div class="mainmenu">
    <h2 class="sidebar1">Main Menu</h2>
    <ul>
        <li><a href="{{ URL::to('addblog') }}">Create Blog</a></li>
        <!--        <li><a href="{{ URL::to('editblog') }}">Update Blog</a></li>-->
        <!--        <li><a href="{{ URL::to('deleteblog') }}">Delete Blog</a></li>-->
        <li><a href="{{ URL::to('displayblog') }}">Display Blog</a></li>
    </ul>
</div>
@endsection