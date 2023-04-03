<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link href="/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container text-center mt-3 pt-3 bg-white">
            <div class="row">
                <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
                    {{-- <?php echo $nama ?> --}}
                    {{ $nama }}
                </h1>
                <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
                    {{-- <?php echo $nilai ?> --}}
                    {{ $nilai }}
                </h1>
            </div>

            <div class="row">
                @if (($nilai >= 0) and ($nilai < 70))
            <div class="alert alert-danger d-inline-block">
                Sorry, you didn't pass
            </div>
            @elseif (($nilai >= 90) and ($nilai <= 100))
            <div class="alert alert-success d-inline-block">

                Congrats, you pass

                <div class="row">
                    @switch($nilai)
                    @case(0)
                            <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
                    @break
                    @case(75)
                            <div class="alert alert-success d-inline-block">Lumayan</div>
                    @break
                    @case(100)
                            <div class="alert alert-success d-inline-block">Sempurna</div>
                    @break
                    @default
                            <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
                @endswitch


                </div>


            </div>
            @endif

            </div>




        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
