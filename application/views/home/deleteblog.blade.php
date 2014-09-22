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


@endsection