@extends('layout')

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">Nexus</div>
            <div class="sub-title">Twitter: 
                @if (empty ($twitter)) NO TWITTER! 
                @else <a href="https://nexuscreates.com">
                @foreach ($twitter as $twitter) {{ $twitter }} 
                </a>
                @endforeach
                @endif</div>
        </div>
    </div>

@stop