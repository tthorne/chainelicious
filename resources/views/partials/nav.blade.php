<!-- Navigation Section -->
<div class="navbar navbar-inverse navbar-fixed-top menu" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/products">Bracelets</a></li>
                <li><a href="/products">Earrings</a></li>
                <li><a href="/products">Necklaces</a></li>
                <li><a href="/products">Other Work</a></li>
                @if (Auth::user()->admin == 1)
                    <li><a href="/admin"><i class="fa fa fa-cog fa-lg fa-fw fa-spin"></i> Admin</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login"><i class="fa fa-user-plus fa-lg fa-fw"></i> Login</a></li>
                    <li><a href="/auth/register"><i class="fa fa-sign-in fa-lg fa-fw"></i> Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg fa-fw"></i> {{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>Admin: {{ Auth::user()->admin }} </li>
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>