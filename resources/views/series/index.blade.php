<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2" > Adicionar nova serie</a>

    <ul class="list-group">
        @foreach($series as $serie)
        <li class = "list-group-item">{{ $serie->nome }} </li>
        @endforeach
    </ul>
    @{{noome}}

    <script>
        const series = {{ Js::from($series) }};
    </script>
</x-layout>