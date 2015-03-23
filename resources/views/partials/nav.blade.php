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
                <li><a href="/categories/bracelets">Bracelets</a></li>
                <li><a href="/categories/earrings">Earrings</a></li>
                <li><a href="/categories/necklaces">Necklaces</a></li>
                <li><a href="/categories/other">Other Work</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login"><i class="fa fa-user-plus fa-lg fa-fw"></i> Login</a></li>
                    <li><a href="/auth/register"><i class="fa fa-sign-in fa-lg fa-fw"></i> Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-lg fa-fw"></i> {{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/users/{{ Auth::user()->id }}">My Profile</a></li>
                            <li><a href="/users/{{ Auth::user()->id }}/edit">Edit My Profile</a></li>
                            <li><a href="/wishlists/{{ Auth::user()->id }}">My Wishlist</a></li>
                            <li class="divider"></li>
                            @if ( Auth::user()->admin===1 )
                                <li class="dropdown-header">Administration Panel</li>
                                <li><a href="/users">Customers</a></li>
                                <li><a href="/categories">Products</a></li>
                                <li><a href="/wishlists">Wishlists</a></li>
                                <li class="divider"></li>
                            @else
                            @endif
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>