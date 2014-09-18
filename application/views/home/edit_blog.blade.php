@layout('home.layout')
@section('content')
<div class="container-fluid">
    <form class="form-horizontal" role="form" action="{{ URL::to('edit_blog') }}" method="post">
        @if (Session::has('message_errors'))
        <?php $messages = Session::get('message_errors'); ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($messages as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (Session::has('message_success'))
        <div class="alert alert-success" role="alert">
            <p> {{ Session::get('message_success')}}</p>
        </div>
        @endif
        <input type="hidden" class="form-control" name="id" value="{{ $article_data->id }}"/>
        <div class="row clearfix">
            <div class="col-md-3 column menu1">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <!--                <li><a href="#">ADD Blog</a></li>-->
                    <!--                <li><a href="#">UPDATE Blog</a></li>-->
                    <!--                <li><a href="#">DELETE Blog</a></li>-->
                    <li><a href="#">View Blogs</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
            <br>

            <div class="col-md-9 column menu2">
                <div class="form-inline">
                    <div class="form_move">
                        <label for="name">Article Title &nbsp; &nbsp;</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="name">Write your text here &nbsp; &nbsp;</label>
                    <textarea rows="10" cols="50"> </textarea>
                </div>
                <div class="btn_move">
                    <button type="submit" class="btn btn-success">UPDATE</button>
                    <button type="reset" class="btn btn-info">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection