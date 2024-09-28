@include('components/header')

<body>

<h1 class="mb-4 text-6xl font-extrabold bg-gradient-to-r from-primary to-danger bg-clip-text text-transparent text-center">Título colorines</h1>

<div class="h-56 grid grid-cols-4 gap-5 content-center " >
    @foreach(App\Models\Titulacion::all() as $titulacion)
        <div class="card glass w-96">
            <div class="card-body ">
                <h2 class="card-title">{{ $titulacion->abreviatura }} </h2>
                <p>{{ $titulacion->nombre }}</p>
                <div class="card-actions justify-end">
                    <a class="btn btn-primary" href="{{ url('/ver/' . $titulacion->abreviatura) }}">Ver</a>
                    <a class="btn btn-error" href="{{ url('/borrar/titulacion/' . $titulacion->id) }}">Borrar</a>
                </div>
            </div>
        </div>
    @endforeach

</div>




</body>
