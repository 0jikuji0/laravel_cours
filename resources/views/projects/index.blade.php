<x-layouts.home>
    <h2 class="font-medium">Projets</h2>

    <ul class="list-disc list-inside">
        @foreach ($projects as $index => $project)
            <li>
                <a href="{{ route('projects.show', $index) }}">{{ $project['title'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layouts.home>