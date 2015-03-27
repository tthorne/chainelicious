@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Custom Work!</h1>
                    @if ( !$customworks->count() )
                        You have no projects!
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach( $customworks as $customwork )
                                <tbody>
                                <tr>
                                    <td><a href="/customworks/{{ $customwork->id }}">{{ $customwork->created_at }}</a></td>
                                    <td>
                                        @if ( $customwork->status===0 )
                                            Unread
                                        @elseif ( $customwork->status===1 )
                                            Read
                                        @elseif ( $customwork->status===2 )
                                            Started
                                        @elseif ( $customwork->status===3 )
                                            Shipped
                                        @endif

                                    </td>
                                    <td>{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('customworks.destroy', $customwork->id))) !!}
                                        {!! link_to_route('customworks.edit', 'Edit', array($customwork->id), array('class' => 'btn btn-info')) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
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