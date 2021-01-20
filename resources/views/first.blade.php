<html>
    <head>
        <style>
            .link a{
                color: red;
                float: right;
                margin-right: 4em;
            }
        </style>
    </head>

    <body>
        <div class="link">
            @if (Route::has('second'))
                <a href="{{ route('second')}}">To Second!</a>
            @endif
        </div>
        <p>Hello First DB!</p>
        <p>DB name: {{$firstdb}}</p>
        <p>Details: <strong>First DB blade template</strong></p>
    </body>
</html>