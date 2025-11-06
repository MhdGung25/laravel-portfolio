@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <article class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_1px_2px_rgba(0,0,0,0.06)]">
        <h1 class="text-2xl font-semibold mb-2">{{ $project->title }}</h1>

        @if($project->image)
            <div class="mb-4">
                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full rounded">
            </div>
        @endif

        <div class="mb-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
            {!! nl2br(e($project->description)) !!}
        </div>

        @if($project->url)
            <p>
                <a href="{{ $project->url }}" target="_blank" rel="noopener" class="text-[#f53003] underline">Visit project</a>
            </p>
        @endif
    </article>
@endsection
