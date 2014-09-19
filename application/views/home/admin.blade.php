@layout('home.layout')
@section('content')
<style>
    .col-md-12 {
        width: 100%;
        margin-left: -80px;
    }

    .row {
        margin-right: -21px;
        margin-left: 60px;
        margin-top: 0px;

    }

    .row1 {
        margin-right: -15px;
        margin-left: 63px;
        margin-top: -15px;
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

    .mainmenu, .contact {
        width: 310px;
        float: right;
        margin-right: 180px;
        margin-top: -172px;
    }
</style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('index') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
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
<div class="content">
    <div class="content-left">
        <div class="row1">
            <img src="http://localhost/costprize_blog/public/img/Banner_6.jpg">
        </div>
    </div>
</div>
<div class="mainmenu">
    <h2 class="sidebar1">Main Menu</h2>
    <ul>
        <li><a href="{{ URL::to('addblog') }}">Create Blog</a></li>
        <li><a href="{{ URL::to('editblog') }}">Update Blog</a></li>
        <li><a href="{{ URL::to('deleteblog') }}">Delete Blog</a></li>
        <li><a href="{{ URL::to('displayblog') }}">Display Blog</a></li>
    </ul>
</div>
@endsection