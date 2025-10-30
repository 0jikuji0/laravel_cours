<x-layouts.home>
    <h2 class="font-medium">{{ $project['title'] }}</h2>
    <a href="{{ route('projects.index') }}">Retour</a>
    <ul class="list-disc list-inside">
        @foreach ($project['technologies'] as $technologies)
            <li> {{ $technologies }}</li>
        @endforeach
    </ul>
</x-layouts.home>