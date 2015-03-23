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
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <p>{{ Session::get('message') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif

@if ($errors->any())
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        @foreach ( $errors->all() as $error )
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif