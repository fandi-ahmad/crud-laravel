<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>halo nama saya {{ $nama }}</p>

    <p>daftar nama hewan</p>
    <ul>
        @foreach($animalList as $key => $value)
            <li>{{ $key+1 }}. {{ $value }}</li>
        @endforeach
    </ul>

    <hr>

    <ul>
        @for($i=0; $i<2; $i++)
            <li>{{ $i+1 }}. {{ $animalList[$i] }}</li>
        @endfor
    </ul>

    <hr>

    <ul>
        @for($i=0; $i<3; $i++)
            @if(($i+1) % 2 == 1)
                <li>{{ $i+1 }}. {{ $animalList[$i] }}</li>            
            @endif
        @endfor
    </ul>

</body>
</html>