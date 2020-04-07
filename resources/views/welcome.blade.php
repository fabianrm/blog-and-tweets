@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="mb-4">Last Entries</h1>

                @foreach($entries as $entry)
                <div class="card mb-4">
                    <div class="card-header"> {{$entry->id}} . {{$entry->title}}</div>
                        <div class="card-body">
                            <p>{{$entry->content}}</p>  {{--variable que viene desde el controlador GuestController en index--}}
                        </div>
                        <div class="card-footer">
                            Author:
                            <a href="{{ url('users/'.$entry->user_id)  }}">
                                {{ $entry->user->name }}
                            </a>
                            {{--En el Model Entry se definio la relacion en el metodo user()--}}
                        </div>
                </div>
                @endforeach

                {{ $entries->links() }}
            </div>
        </div>
    </div>
@endsection
