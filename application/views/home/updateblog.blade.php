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
</style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
        <li><a href="{{ URL::to('displayblog') }}"><span>View</span></a></li>
        <li><a href="{{ URL::to('updateblog') }}"><span>Update</span></a></li>
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
            <?php $success = Session::get('success'); ?>

            <div class="alert alert-success" role="alert">
                <ul>
                    <li>
                        {{ $success }}
                    </li>
                </ul>
            </div>
            @endif
            <form class="form-horizontal" role="form" method="post" action="{{ URL::to('updateblog') }}">
                <input type="hidden" class="form-control" name="article_id" value="{{ $article_data->ai_id }}"/>

                <div class="form-group">

                    <label for="AI_Title" class="col-sm-2 control-label">Article Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article_title"
                               value="{{ $article_data->ai_title }}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="AI_Author" class="col-sm-2 control-label">Author Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author_name"
                               value="{{ $article_data->ai_author }}"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--<div class="container-fluid">-->
<!--    <form class="form-horizontal" role="form" action="{{ URL::to('edit_blog') }}" method="post">-->
<!--        @if (Session::has('message_errors'))-->
<!--        --><?php //$messages = Session::get('message_errors'); ?>
<!--        <div class="alert alert-danger" role="alert">-->
<!--            <ul>-->
<!--                @foreach($messages as $message)-->
<!--                <li>{{ $message }}</li>-->
<!--                @endforeach-->
<!--            </ul>-->
<!--        </div>-->
<!--        @endif-->
<!--        @if (Session::has('message_success'))-->
<!--        <div class="alert alert-success" role="alert">-->
<!--            <p> {{ Session::get('message_success')}}</p>-->
<!--        </div>-->
<!--        @endif-->
<!--        <input type="hidden" class="form-control" name="id" value="{{ $article_data->id }}"/>-->
<!--        <div class="row clearfix">-->
<!--            <div class="col-md-3 column menu1">-->
<!--                <ul class="nav nav-pills nav-stacked">-->
<!--                    <li class="active"><a href="#">Home</a></li>-->
<!--                    <!--                <li><a href="#">ADD Blog</a></li>-->-->
<!--                    <!--                <li><a href="#">UPDATE Blog</a></li>-->-->
<!--                    <!--                <li><a href="#">DELETE Blog</a></li>-->-->
<!--                    <li><a href="#">View Blogs</a></li>-->
<!--                    <li><a href="#">Logout</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <br>-->
<!---->
<!--            <div class="col-md-9 column menu2">-->
<!--                <div class="form-inline">-->
<!--                    <div class="form_move">-->
<!--                        <label for="name">Article Title &nbsp; &nbsp;</label>-->
<!--                        <input type="text" class="form-control" name="name" id="name"/>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <hr>-->
<!--                <div class="form-group">-->
<!--                    <label for="name">Write your text here &nbsp; &nbsp;</label>-->
<!--                    <textarea rows="10" cols="50"> </textarea>-->
<!--                </div>-->
<!--                <div class="btn_move">-->
<!--                    <button type="submit" class="btn btn-success">UPDATE</button>-->
<!--                    <button type="reset" class="btn btn-info">Cancel</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->
@endsection