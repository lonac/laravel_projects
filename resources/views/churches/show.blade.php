@extends('masterchurch')
@section('title', $church->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            <div class="well">
                <h1>{{ $church->name }}</h1>
                <h2>About</h2>
                <p>
                    {{ $church->description }}
                </p>
                <h2>Category</h2>
                <p>
                    {{ $church->category->name }}
                </p>
                <h2>Region</h2>
                <p>
                    {{ $church->region->name }}
                </p>
                <h2>District</h2>
                <p>
                    {{ $church->district->name }}
                </p>
                <h2>Phone(s)</h2>
                <p>
                    @if($church->phones->count() > 0)
                        <ul>
                            @foreach($church->phones as $phone)
                                <li>{{ $phone->number }}</li>
                            @endforeach
                        </ul>
                    @else
                        Null
                    @endif
                </p>
                <h2>Email(s)</h2>
                <p>
                    @if($church->emails->count() > 0)
                        <ul>
                            @foreach($church->emails as $email)
                                <li>{{ $email->address }}</li>
                            @endforeach
                        </ul>
                    @else
                        Null
                    @endif
                </p>                
                <h2>Address</h2>
                <p>
                    {{ $church->address }}
                </p>
                <h2>Other name</h2>
                <p>
                    {{ $church->other_name }}
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Similar Churches</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                            @if($churches->count() > 0)
                                @foreach($churches as $church)
                                    <tr>
                                        <td><a href="{{ url('churches/' . $church->slug) }}">{{ $church->name }}</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center">
                                    Empty
                                </p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
