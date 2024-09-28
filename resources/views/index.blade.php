@include('components/header')

    <body>

    <div class="carousel carousel-center rounded-box">
        <div class="carousel-item">
            <livewire:crear-titulacion />
        </div>
        <div class="carousel-item">
            <livewire:crear-curso />
        </div>
        <div class="carousel-item">
            <livewire:crear-profesor />
        </div>

    </div>

     @foreach(App\Models\Titulacion::all() as $titulacion)

         <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200 border">
             <div class="collapse-title text-xl font-medium">{{ $titulacion->nombre }} ({{ $titulacion->abreviatura }}) </div>
             <div class="collapse-content">
                 @foreach($titulacion->cursos()->get() as $curso)
                    <b> {{ $curso->nombre }} </b>
                         <div class="overflow-x-auto">
                             <table class="table">
                                 <!-- head -->
                                 <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombre</th>
                                     <th>Elegible</th>
                                     <th>Votos</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                         @foreach($curso->profesores()->get() as $prof)
                             <tr>
                                 <th>{{ $prof->id }}</th>
                                 <td>{{ $prof->nombre  }}</td>
                                 <td>{{ $prof->elegible }}</td>
                                 <td>{{ $prof->votos }}</td>
                             </tr>
                         @endforeach
                                 </tbody>
                             </table>
                         </div>

                 @endforeach
             </div>
         </div>
     @endforeach
    </body>
</html>


@include('components/footer')
