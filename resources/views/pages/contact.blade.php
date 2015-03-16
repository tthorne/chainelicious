@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Contact <span class="head">Chainelicious</span> today!</h1>
                    <form class="form-horizontal" role="form" method="POST" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Message</label>
                            <div class="col-md-6">
                                <textarea type="name" class="form-control" name="message"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default" style="margin-right: 15px;">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Breaker Section -->
    <section id="jumpring">
        <div class="jumpring-section">
            <div class="container">
                <div class="col-lg-12">
                    <img src="{{ URL::asset('img/jumpring.png') }}" class="img-responsive center" alt="Chainelicious">
                </div>
            </div>
        </div>
    </section>
@stop