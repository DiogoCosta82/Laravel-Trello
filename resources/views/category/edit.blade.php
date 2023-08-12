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
                    {{ __("Modification d'une catégorie") }}
                    <div class="flex px-4 pb-8 items-start overflow-x-scroll">
                        <form action="{{route('category.update', $category->id)}}" method="POST" class="space-y-10">
                            @csrf
                            @method('put')
                            <x-input-label value="La catégorie" />
                            <x-text-input name="name" value="{{$category->name}}" />
                            <x-primary-button>Modifier</x-primary-button>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <x-input-error messages="{{$error}}" />
                            @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>