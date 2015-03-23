@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Customers</h1>
                    @if ( !$users->count() )
                        You have no customer!
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>First Name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach( $users as $user)
                                <tbody>
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) !!}
                                        {!! link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) !!}
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