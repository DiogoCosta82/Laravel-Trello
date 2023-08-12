<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Votre liste de tâches") }}

                    <div class="flex px-4 pb-8 items-start overflow-x-scroll">
                        @foreach($categories as $category)
                        <div class="rounded bg-grey-light  flex-no-shrink w-64 p-2 mr-3">
                            <div class="flex justify-between py-1">
                                <h3 class="text-sm">{{$category->name}}</h3>
                                <a href="{{route('category.edit', $category->id)}}">
                                    <svg class="h-4 fill-current text-grey-dark cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                                    </svg>
                                </a>
                            </div>
                            <!-- liste des tâches -->
                            <div class="text-sm mt-2">
                                @foreach ($tasks as $task)
                                @if($task->category_id==$category->id)
                                <div class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                    {{$task->name}}
                                </div>
                                @endif
                                @endforeach
                                <p class="mt-3 text-grey-dark">Add a card...</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>