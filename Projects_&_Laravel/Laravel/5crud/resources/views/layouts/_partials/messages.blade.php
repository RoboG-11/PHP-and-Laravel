@if($message = Session::get('success'))
    <div style="padding: 15px; background-color: green;">
        <p>
            {{ $message }}
        </p>
    </div>    
@endif

@if($message = Session::get('danger'))
    <div style="padding: 15px; background-color: red;">
        <p>
            {{ $message }}
        </p>
    </div>    
@endif