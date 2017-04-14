@extends('layouts.master')

@section('content')

    <div class="has-text-centered">
        <h2>Sign In</h2>

        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form method="POST" action="/login">
                    {{csrf_field()}}


                    <label class="label" style="color: red;">Email</label>
                    <p class="control">
                        <input class="input" type="email" placeholder="What yo email?" name="email" required>
                    </p>

                    <label class="label" style="color: red;">Your Password</label>
                    <p class="control">
                        <input class="input" type="password" placeholder="Password" name="password" required>
                    </p>

                    <div class="control is-grouped">
                        <p class="control">
                            <button class="button is-primary">Sign In</button>
                        </p>
                    </div>

                    @include('layouts.errors')

                </form>
            </div>
        </div>
    </div>
@endsection