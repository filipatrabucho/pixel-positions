@props(['width' => 90])

<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <div class="flex gap-20 ">
        <div>
            <img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" alt="" class="rounded-xl"/>
        </div>
        <div>
            <h2 class="font-bold text-lg">{{ $job->title }}</h2>
            <p>Salary: {{ $job->salary }}.</p>
            <p>Location: {{ $job->location }}</p>
            <p>Schedule: {{ $job->schedule }}</p>
        </div>
    </div>
    <div class="my-10">
        <h3>Lorem, ipsum.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt repellendus recusandae at.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut iure qui, neque ullam doloribus at.</p>
        
        <br />
        <h3>Lorem, ipsum.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt repellendus recusandae at.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut iure qui, neque ullam doloribus at.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsam ab nisi, eveniet quos aspernatur ipsum. Voluptatibus eligendi aliquid perferendis?</p>
    </div>
       
    {{-- @can('edit-job', $job) --}}
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/jobs/{{ $job->id }}/edit">
            Edit Job
        </a>
    {{-- @endcan --}}
        
</x-layout>