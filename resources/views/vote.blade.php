@include('components/header')


<body>

            @foreach($titulacion->cursos()->get() as $curso)

                <b> {{ $curso->nombre }} <a class="btn btn-error" href="{{ url('/borrar/curso/' . $curso->id) }}">Borrar</a> </b>
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Elegible (Admin)</th>
                            <th>Votos (Admin)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($curso->profesores()->get() as $prof)
                            <tr>
                                <th>{{ $prof->id }}</th>
                                <td>{{ $prof->nombre  }}</td>
                                <td>{{ $prof->elegible }}</td>
                                <td>{{ $prof->votos }}</td>
                                <td><a class="btn btn-accent" href="{{ url('/votar/' . $prof->id) }}">Votar</a> <a class="btn btn-error" href="{{ url('/borrar/profesor/' . $prof->id) }}">Borrar</a> <a class="btn btn-error" href="{{ url('/actualizar/profesor/' . $prof->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            @endforeach

</body>
</html>
