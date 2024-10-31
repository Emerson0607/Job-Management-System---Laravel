<x-layout>
    
    <x-slot:heading>Jobs Details Page</x-slot:heading>
    <h1><strong>{{$greetings}}</strong> this is job details page</h1>
    <h2>{{$job->title}}</h2>
    <p>Pays salary of {{$job->salary}}</p>
    
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    
</x-layout>