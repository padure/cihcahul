@if ($errors->any())
        <ul class="alert alert-danger errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    @endif