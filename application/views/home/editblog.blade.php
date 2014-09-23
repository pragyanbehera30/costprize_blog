@layout('home.layout')
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form class="form-horizontal" role="form" method="post" action="{{ URL::to('editblog') }}">
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
                    <label for="AI_Desc" class="col-sm-2 control-label"> Description</label>
                    <div class="col-sm-10">
                        <textarea rows="10" cols="63" name="description">{{ $article_data->ai_desc }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection