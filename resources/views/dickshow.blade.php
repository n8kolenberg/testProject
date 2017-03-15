@extends('layouts.master')

@section('content')
 <h2>{{$dick->body}}</h2>


 @foreach($dick->balls as $ball)

     <ul>
         <li>  <p> {{$ball->body}} </p> <strong>{{$ball->created_at->diffForHumans() }}</strong>  </li>
     </ul>


 @endforeach
    @stop