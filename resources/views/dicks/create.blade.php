@extends('layouts.master')

@section('content')
<form method="POST" action="/dicks">
    {{csrf_field()}}
    <label class="label">Name</label>
    <p class="control">
        <input class="input" type="text" placeholder="Your dick" name="name" required>
    </p>


    <label class="label">How is your dick?</label>
    <p class="control">
        <textarea class="textarea" placeholder="Define it here" name="body" required></textarea>
    </p>

    <div class="control is-grouped">
        <p class="control">
            <button class="button is-primary">Submit</button>
        </p>
        <p class="control">
            <button class="button is-link">Cancel</button>
        </p>

    </div>

@include('layouts.errors')

</form>

@stop