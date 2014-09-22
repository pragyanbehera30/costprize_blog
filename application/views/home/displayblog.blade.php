@layout('home.layout')
@section('content')
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('http://localhost/costprize_blog/public/') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('admin') }}"><span>Admin Panel</span></a></li>
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
                <table class="table table-bordered" align="center">
                    <caption>
                        <h2>Articles By Author</h2>
                    </caption>
                    <tbody align="center">
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
                            <a href='{{ URL::to("deletearticle/$Pragyan->ai_id") }}'>
                                <span class="glyphicon glyphicon-remove">&nbsp;DELETE</span>

                                
                                <!-- Modal -->
                                <div class="modal fade" id="$Pragyan->ai_id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="$Pragyan->ai_id">Delete Record</h4>
                                            </div>
                                            <div class="modal-body">
                                                Do you want to delete Permanently ???
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection