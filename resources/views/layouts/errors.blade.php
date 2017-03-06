@if ( count($errors->all()) )
    <div class="notification is-danger has-text-centered">

        @foreach($errors->all() as $error)
            <ul>
                <li> {{ $error }}</li>
            </ul>
        @endforeach
    </div>
@endif