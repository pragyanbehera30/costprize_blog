@layout('home.layout')
@section('content')
<style>
    .col-md-12 {
        width: 100%;
        margin-left: -80px;
    }
</style>
<div class="topmenu">
    <ul>
        <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px">
            <a href="{{ URL::to('index') }}"><span>Home</span></a></li>
        <li><a href="{{ URL::to('description') }}"><span>View</span></a></li>
    </ul>
</div>
<div class="row1">
@if(Session::has('errors'))
<?php $errors = Session::get('errors');
?>
<div class="alert alert-danger" role="alert">
    <p class="alert">Username or password incorrect.</p>
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
</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail" align="center">
                        <img alt="300x200" src="http://localhost/costprize_blog/public/img/%20prag5.jpg"/>

                        <div class="caption">
                            <h3>
                                Isn’t technology wonderful...
                            </h3>
                            <br>
                            <h5>
                                Mary Angel
                            </h5>
                        </div>
                        <p>
                            Wonderful technology, well isn't it? When I want to remind my husband to pick up
                            milk on
                            his way home, or not to forget he promised to stop by his moms on his way home, then
                            I just text him and all is taken care of. What a technological dream, whether he is
                            available or not, I have reminded him.
                        </p>

                        <p>
                            I can remove so many things from my imaginary
                            plate by texting and from the plates of my friends.While having lunch with a friend
                            the
                            other day she asked me to please text her to remind her to text someone else a
                            question
                            that has been looming over her head, and the third friend at the table asked that
                            while
                            I had my phone out could I please text her to remind her to ask her husband a
                            question
                            she has been forgetting for days. What a wonderful gift of technology.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail" align="center">
                        <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag3.jpg"/>

                        <div class="caption">
                            <h3>
                                Isn’t technology wonderful...
                            </h3>
                            <br>
                            <h5>
                                Mary Angel
                            </h5>
                        </div>
                        <p>
                            Wonderful technology, well isn't it? When I want to remind my husband to pick up
                            milk on
                            his way home, or not to forget he promised to stop by his moms on his way home, then
                            I just text him and all is taken care of. What a technological dream, whether he is
                            available or not, I have reminded him.
                        </p>

                        <p>
                            I can remove so many things from my imaginary
                            plate by texting and from the plates of my friends.While having lunch with a friend
                            the
                            other day she asked me to please text her to remind her to text someone else a
                            question
                            that has been looming over her head, and the third friend at the table asked that
                            while
                            I had my phone out could I please text her to remind her to ask her husband a
                            question
                            she has been forgetting for days. What a wonderful gift of technology.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail" align="center">
                        <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag4.jpg"/>

                        <div class="caption">
                            <h3>
                                Isn’t technology wonderful...
                            </h3>
                            <br>
                            <h5>
                                Mary Angel
                            </h5>
                        </div>
                        <p>
                            Wonderful technology, well isn't it? When I want to remind my husband to pick up
                            milk on
                            his way home, or not to forget he promised to stop by his moms on his way home, then
                            I just text him and all is taken care of. What a technological dream, whether he is
                            available or not, I have reminded him.
                        </p>

                        <p>
                            I can remove so many things from my imaginary
                            plate by texting and from the plates of my friends.While having lunch with a friend
                            the
                            other day she asked me to please text her to remind her to text someone else a
                            question
                            that has been looming over her head, and the third friend at the table asked that
                            while
                            I had my phone out could I please text her to remind her to ask her husband a
                            question
                            she has been forgetting for days. What a wonderful gift of technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection