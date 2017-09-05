@extends('templates.default')

@section('title', 'Contact : '.$contact->name)

@section('content')
    {{auth()->user()->username}}
    <p>{{ $contact->contact }}</p>

    <h2 class="title">Contact</h2>

    @foreach($contact->contacts as $contact)
        <div class="column is-one-quarter">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <a href="{{route('ContactShow',
                        ['id'=>$contact->user_name])}}">{{$contact->message}}</a>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        Contacter {{ $contact->user->username }}
                        <small>{{$contact->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection