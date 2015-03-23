@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Categories!</h1>
                    @if ( !$categories->count() )
                        You have no projects!
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach( $categories as $category )
                                <tbody>
                                <tr>
                                    <td><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></td>
                                    <td></td>
                                    <td></td>
                                    <td>{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->slug))) !!}
                                        {!! link_to_route('categories.products.create', 'Add Product', array($category->slug), array('class' => 'btn btn-info')) !!}
                                        {!! Form::close() !!}</td>
                                </tr>
                                </tbody>

                            @endforeach
                        </table>
                        @endif
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