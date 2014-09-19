@layout('home.layout')

@section('content')
<div class="container-fluid">
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
    <form class="form-horizontal" role="form" action="{{ URL::to('add_blog') }}" method="POST">
        <div class="row clearfix">
            <div class="col-md-2 column menu1">
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
            <div class="col-md-10 column menu2">
                <div class="form-inline">
                    <div class="form_move">
                        <label for="name">Article Title&nbsp; &nbsp;</label>
                        <input type="text" class="form-control" value="{{ Input::old('name') }}" name="name" id="name"/>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="msg">Add your Content &nbsp; &nbsp;</label>
                    <textarea rows="10" cols="50" name="msg" value="{{ Input::old('msg') }}"> </textarea>
                </div>
                <div class="btn_move">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection