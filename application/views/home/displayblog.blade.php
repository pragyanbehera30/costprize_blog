@layout('home.layout')
@section('content')
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
            <div class="row">
                <table class="table table-bordered" align="center">
                    <caption>
                        <h3>Articles By Author</h3>
                    </caption>
                    <tbody align="center">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>


                    </tr>
                    @foreach($Pragyans as $Pragyan)
                    <tr>
                        <td>
                            {{ $Pragyan->ai_title }}
                        </td>
                        <td>
                            {{ $Pragyan->ai_author }}
                        </td>
                        <!--            <td>-->
                        <!--                {{ $Pragyan->ai_publishdate }}-->
                        <!--            </td>-->
<!--                        <td>-->
<!--                            <a href='{{ URL::to("editBlog/$Pragyan->ai_id") }}'>-->
<!--                                <span class="glyphicon glyphicon-ok"></span>-->
<!--                            </a>-->
<!---->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <a href='{{ URL::to("deleteBlog/$Pragyan->ai_id") }}'>-->
<!--                                <span class="glyphicon glyphicon-remove"></span>-->
<!--                            </a>-->
<!---->
<!--                        </td>-->
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection