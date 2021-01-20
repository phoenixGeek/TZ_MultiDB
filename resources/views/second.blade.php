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
            @if (Route::has('home'))
                <a href="{{ route('home')}}">To Home!</a>
            @endif
        </div>

        <p>Hello Second DB!</p>

        <p>First DB : {{$firstdb}}</p>

        <p>Second DB : {{$seconddb}}</p>

        <p>Details: <strong>Second DB blade template</strong></p>
    </body>
</html>
