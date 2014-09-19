@layout('home.layout')
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
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
    </div>
</div>
<form class="form-horizontal" role="form" method="post" action="{{ URL::to('deleteblog') }}">
    <input type="hidden" class="form-control" name="article_id" value="{{ $article_id }}"/>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <p>Are You Sure!</p><hr>
            <button type="submit" class="btn btn-default">Delete</button>
        </div>
    </div>
</form>
@endsection