@extends('layouts.master')

@section('content')

<div class="hero-cta">
    <nav class="level">
        <div class="level-item has-text-centered">
            <p class="title">Look at all the dicks! <a class="button is-primary"><span class="icon"><i class="fa fa-download"></i></span><span>Dicks!</span></a></p>
        </div>
    </nav>
</div>
<div class="section main">
    <div class="container">
        <div class="columns">

            @foreach($dicks as $dick)
            <div class="column is-4">

                <div class="panel">
                    <div class="panel-block section">
                        <p class="has-text-centered"><i class="fa fa-camera-retro icon-block"></i></p>
                        <br>

                        <p><a href="/dicks/{{$dick->id}}">{{$dick->body}}</a></p>
                        <br>
                        <p class="has-text-centered"><a class="button is-info is-outlined" href="/dicks/{{$dick->id}}">{{$dick->name}}</a></p>
                    </div>

                </div>
            </div>
                @endforeach
        </div>



        </div>
    </div>


@endsection