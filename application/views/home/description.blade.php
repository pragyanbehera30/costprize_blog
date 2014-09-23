@layout('home.layout')
@section('content')
<style>
    .col-md-12 {
        width: 100%;
        margin-left: -80px;
    }

    .row {
        margin-right: -21px;
        margin-left: 60px;
        margin-top: 90px;
    }

    .row1 {
        margin-right: -15px;
        margin-left: 63px;
        margin-top: -50px;

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
        <li><a href="{{ URL::to('description') }}"><span>Description</span></a></li>
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
                    Forest In Winter
                </h3>
                <br>
                <h5>
                    Kay Deardorff
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>


        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag3.jpg"/>

            <div class="caption">
                <h3>
                    April left as a solar flare
                </h3>
                <br>
                <h5>
                    Christopher E. Alley
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>

        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag4.jpg"/>

            <div class="caption">
                <h3>
                    35: A Milestone Birthday
                </h3>
                <br>
                <h5>
                    Katherine Au
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag2.jpg"/>

            <div class="caption">
                <h3>
                    Managing the Holiday Blues
                </h3>
                <br>
                <h5>
                    Bill Derbyshire
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>


        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag6.jpg"/>

            <div class="caption">
                <h3>
                    Dreams Come in Three Phase
                </h3>
                <br>
                <h5>
                    Cassie Frederick
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>

        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag1.jpg"/>

            <div class="caption">
                <h3>
                    Gettysburg’s "Oldest" Family
                </h3>
                <br>
                <h5>
                    James H. Allison
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag7.jpg"/>

            <div class="caption">
                <h3>
                    The History of Harney
                </h3>
                <br>
                <h5>
                    J. W. Beck
                </h5>
            </div>
            <p>
                Wonderful technology, well isn't it? When I want to remind my husband to pick up
                milk on
                his way home, or not to forget he promised to stop by his moms on his way home, then
                I just text him and all is taken care of. What a technological dream, whether he is
                available or not, I have reminded him.
            </p>


        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag8.jpg"/>

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
                I just text him and all is taken care of. What a technological dream!
            </p>

        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail" align="center">
            <img alt="300x200" src="http://localhost/costprize_blog/public/img/prag9.jpg"/>

            <div class="caption">
                <h3>
                    Never Say Never
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

        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection