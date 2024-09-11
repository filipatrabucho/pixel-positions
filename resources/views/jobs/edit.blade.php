<x-layout>
    <h2 class="text-gray-300">
        Edit Job: {{ $job->title}}
    </h2>

<form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="title" 
                  id="title" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  placeholder="Shift Leader"
                  value="{{ $job->title }}"
                  required
                >
              </div>

              @error('title')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm font-medium leading-6 text-white">Salary</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                type="text" 
                name="salary" 
                id="salary" 
                class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                placeholder="$50,000 Per Year"
                value="{{ $job->salary }}"
                required>
              </div>
            </div>
            @error('salary')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
            @enderror
          </div>

          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-white">Location</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="location" 
                  id="location" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  placeholder="Shift Leader"
                  value="{{ $job->location }}"
                  required
                >
              </div>

              @error('location')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-white">Schedule</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="schedule" 
                  id="schedule" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  placeholder="Shift Leader"
                  value="{{ $job->schedule }}"
                  required
                >
              </div>

              @error('schedule')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-white">Url</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input 
                  type="text" 
                  name="url" 
                  id="url" 
                  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                  placeholder="Shift Leader"
                  value="{{ $job->url }}"
                  required
                >
              </div>

              @error('url')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>

          {{-- <div class="sm:col-span-4">
            <x-forms.input 
              label="Tags (comma separated)" 
              name="tags"
              values="{{ $job->tags->name }}"
            />
            </div>
          </div> --}}

        </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-between gap-x-6">
      <div class="flex item-center">
        <button class="text-red-500 text-sm font-bold" form="delete-form">Delete</button>
      </div>
      <div class="flex items-center gap-x-6">
        <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-white">Cancel</a>
        <div>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Update
          </button>
        </div>
      </div>
    </div>
  </form>
  <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')

  </form>
  
</x-layout>