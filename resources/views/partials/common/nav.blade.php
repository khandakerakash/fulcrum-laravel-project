<nav class="navbar navbar-default u-border-nav main__nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo.png')}}" alt="Fulcrum Logo" class="img-responsive main__nav--logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form action="#" class="navbar-form navbar-left main__nav--search-box form">
                <div class="form__group">
                    <input type="text" class="form__input u-center-text" placeholder="Search"  id="name">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right main__nav--menu">
                <li><a class="active-page" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Agence</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>