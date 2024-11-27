<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>
    <div class="flex flex-col content-center">
        <ul>
            @foreach ($courses as $course)
            <li><a href="{{route('courses.show', ['course'=>$course])}}">{{$course->name}}</a></li>
            @endforeach
            <br>
        </ul>
        <a href="{{ route('courses.create') }}">create</a>
    </div>
</x-app-layout>