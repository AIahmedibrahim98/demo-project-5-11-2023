<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        @php

        @endphp
        @php($x = 10)

        {{-- {{ $x }} --}}
        {!! "<h1 class='text-primary'>Hello from blade</h1>" !!}

        @if ($x == 10)
            <h2>X = 10</h2>
        @elseif ($x == 9)
            <h3>X = 9</h3>
        @else
            <h1 class="text-danger">X = {{ $x }}</h1>
        @endif

        @unless ($x > 10)
            XXXXXXXXXXXXXXXXXXXXXXXXXXXX
        @endunless

      {{--   @isset()

        @endisset

        @empty()

        @endempty --}}

        @switch($x)
            @case(10)
            <h1>form switch x = 10</h1>
                @break
        @case(9)
        <h1 class="text-primary">form switch x = 10</h1>
        @break
            @default
            <h1 class="text-danger">form switch x not match</h1>
        @endswitch

        @php($y = 1)
        @while($y < 10)
       <p> {{ $y++ }}</p>
        @endwhile

        @for ($i = 0 ; $i <= 10 ; $i++)
            <h1 class="text-primary">{{ 'Current value of i ' . $i }}</h1>
        @endfor

<hr><hr><hr><hr><hr><hr><hr>
        @php($names = ['ahmed','ali','maha','sara','adel'])
        {{-- @php($names = []) --}}
        <h2 class="text-info">Names In Class</h2>
        {{-- @foreach ($names as $key=>$name) --}}
        {{-- @continue($name == 'maha') --}}
        {{-- @break($name == 'maha') --}}

        {{-- @if ($name == 'maha')
            @continue
        @endif --}}

            {{-- <h1>{{ $name }}</h1> --}}
        {{-- @endforeach --}}

        @forelse ($names as $name)
        @if ($loop->first)
            <p>i'm in first iteration now</p>
        @endif
        <h1>{{$loop->iteration .')'. $name }}</h1>
        @if ($loop->last)
        <p>i'm in last iteration now</p>
    @endif
        {{-- <h1 class="text-primary">{{$loop->index .')'. $name }}</h1> --}}
        @empty
            <h4>No data Found</h4>
        @endforelse
    </main>

    @php($isActive = false)

    {{-- <h1 class="d-inline @if($isActive) text-success @else text-danger @endif">User Status </h1><small>if text red user is deactive</small> --}}
    {{-- <h1 class="d-inline {{ $isActive ? 'text-success' : 'text-danger' }}">User Status </h1><small>if text red user is deactive</small> --}}
    <h1 @class(['d-inline','text-success'=>$isActive,'text-danger'=>!$isActive])>User Status </h1><small>if text red user is deactive</small>
    <p @style([
        'font-weight: 900'=> 1==9
    ])>hello</p>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
