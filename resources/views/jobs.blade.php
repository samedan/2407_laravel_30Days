<x-layout>
    <x-slot:heading>
        Homepage
    </x-slot:heading>

    
    <ul>
    @foreach ($jobs as $job)
            <li>
                <strong><a href="/jobs/{{ $job['id']}}" class="text-blue-500 hover:underline">
                {{$job['title']}}: </a></strong> Pays {{$job['salary']}} per year.</li>
    @endforeach

</ul>
</x-layout>
