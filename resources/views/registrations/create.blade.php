@extends('layouts.master')


@section('content')

<div class="has-text-centered">
    <h2>Register</h2>


    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <form method="POST" action="/register">
                {{csrf_field()}}
               <div class="field"> <label class="label" style="color: red;" for="name" >Name</label>
                <p class="control">
                    <input class="input" type="text" id="name" placeholder="What yo name?" name="name" required>
                </p>
               </div>

                <label class="label" style="color: red;">Email</label>
                <p class="control">
                    <input class="input" type="email" placeholder="What yo email?" name="email" required>
                </p>

                <label class="label" style="color: red;">Your Password</label>
                <p class="control">
                    <input class="input" type="password" placeholder="Password" name="password" required>
                </p>

                <label class="label" style="color: red;">Confirm your password</label>
                <p class="control">
                    <input class="input" type="password" placeholder="Your password again" name="password_confirmation" required>
                </p>

                <div class="control is-grouped">
                    <p class="control">
                        <button class="button is-primary">Submit</button>
                    </p>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

</div>
@endsection