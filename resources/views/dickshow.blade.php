@extends('layouts.master')

@section('content')

 <div class="box">
     <header class="card-header">
         <p class="card-header-title tile">
             {{$dick->body}}
         </p>
     </header>

     <br>

     <div class="columns">
         <div class="column is-half is-offset-one-quarter">
             <form method="POST" action="/dicks/{{$dick->id}}/balls">
                 {{csrf_field()}}
                 <label class="label">Balls</label>
                 <p class="control">
                     <input class="input" type="text" placeholder="Describe your balls" name="body">
                 </p>

                 <div class="control is-grouped">
                     <p class="control">
                         <button class="button is-primary">Submit</button>
                     </p>
                 </div>
             </form>
         </div>
     </div>

     {{--@include('layouts.errors')--}}

     <div class="card-content">
         @foreach($dick->balls as $ball)
         <div class="content box has-text-centered">
            {{$ball->body}}
             <a>{{$ball->created_at->diffForHumans()}}</a>
             <br>
         </div>
             @endforeach
     </div>

 </div>

 <br>




@stop