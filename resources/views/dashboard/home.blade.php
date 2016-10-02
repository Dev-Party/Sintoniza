@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @if (count($radios) > 0)
                    @foreach ($radios as $radio)
                    <p>{{ $radio->name }}</p>
                    @endforeach
                @else
                <h4>No hay radios :|</h4>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
