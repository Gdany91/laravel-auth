@extends('layouts.main-layout')

@section('content')
    
    <h1 id='title'>Projects</h1>
    @auth
        <a href="{{ route('admin.project.store') }}">
            CREATE NEW PROJECT
        </a>
    @endauth
    
    <ul class= 'd-flex flex-wrap ' >
        @foreach ($projects as $project)
            <li class= 'projects'>
                <a href="{{ route('project.show', $project) }}">
                    <h2>
                        {{ $project -> name }}
                    </h2>
                    <img class="project-img" src="{{ asset('storage/' . $project -> main_image) }}" alt="">
                </a>
                <div>{{ $project -> release_date }} </div>
            
            </li>
        @endforeach
    </ul>

@endsection