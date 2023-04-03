<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>

    <header>

        @include('layout.nav')
        <h3>@yield('judul')</h3>
        @yield('content')
    </header>


    <hr />
    <br />
    <br />

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul') </h3>


    <!-- bagian konten blog -->
    <h1>Try to add some yield directive here</h1>



    <br />
    <br />
    <hr />

    {{-- Challenge Add Bootsrap Icon From Previous Session 03 for Footer --}}

</body>

</html>
