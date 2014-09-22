@layout('home.layout')
@section('content')
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
        <li><a href="{{ URL::to('addblog') }}"><span>Create</span></a></li>
        <li><a href="{{ URL::to('displayblog') }}"><span>View</span></a></li>
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
            <br>

            <div class="row">
                <table class="table table-bordered tbl_display" align="center">
                    <caption>
                        <h2>Articles By Author</h2>
                    </caption>
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                    </tr>
                    @foreach($Pragyans as $Pragyan)
                    <tr>
                        <td>
                            {{ $Pragyan->ai_id }}
                        </td>
                        <td>
                            {{ $Pragyan->ai_title }}
                        </td>
                        <td>
                            {{ $Pragyan->ai_author }}
                        </td>
                        <td>
                            {{ $Pragyan->ai_desc }}
                        </td>
                        <td>
                            <a href='{{ URL::to("editblog/$Pragyan->ai_id") }}'>
                                <span class="glyphicon glyphicon-ok">&nbsp;EDIT</span>
                            </a>
                        </td>
                        <td>
                            <a href='{{ URL::to("deletearticle/$Pragyan->ai_id") }}' onclick="myFunction()">
                                <span class="glyphicon glyphicon-remove">&nbsp;DELETE</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>function myFunction() {
        confirm("Ae you sure..?");
    }
</script>
@endsection