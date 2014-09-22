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
<!--</style>-->
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
        <li><a href="{{ URL::to('displayblog') }}"><span>View</span></a></li>
        <li><a href="{{ URL::to('addblog') }}"><span>Create</span></a></li>
    </ul>
</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
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
            <?php $success = Session::get('success');?>

            <div class="alert alert-success" role="alert">
                <ul>
                    <li>
                        {{ $success }}
                    </li>
                </ul>
            </div>
            @endif

            <form class="form-horizontal" role="form" method="post" action="{{ URL::to('addblog') }}">
                <div class="form-group">
                    <label for="AI_Title" class="col-sm-2 control-label">Article Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article_title"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="AI_Author" class="col-sm-2 control-label">Author Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="AI_Desc" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                        <textarea rows="10" cols="63" name="description"> </textarea></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection