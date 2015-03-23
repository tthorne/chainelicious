<!-- Header Section -->
<header id="header">
    <div class="header-section">
        <div class="container">
            <div class="col-lg-12">
                <img src="{{ URL::asset('img/logo.png') }}" class="img-responsive center" alt="Chainelicious">
            </div>
        </div>
    </div>
</header>

@if (Session::has('message'))
    <div class="flash alert-info">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif