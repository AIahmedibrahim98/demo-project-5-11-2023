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

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <?php $x = 100; ?>
        <h1>Hello <?php echo "$x"; ?></h1>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <?php if($x == 100){ ?>
                        <h3 class="card-title">X now = 100</h3>
                        <?php }else{ ?>
                        <p class="card-text">X now not = 100</p>
                        <?php } ?>
                    </div>

                    <div class="card-body">
                        @if ($x == 100)
                            <h3 class="card-title">X now = <?php echo "$x"; ?></h3>
                        @else
                            <p class="card-text">X now not = 100</p>
                        @endif
                    </div>
                    <?php echo "$x"; ?>

                    {{ $x }}

                    {{ date('Y-m-d') }}

                    {{ '<h1 style="color:red">Hello</h1>' }}

                    {!! '<h1 style="color:red">Hello</h1>' !!}

                    {{--
                        gdfjkhgjkdfhg
                        jkdfhgjkdfhjkgdfk
                        --}}

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
