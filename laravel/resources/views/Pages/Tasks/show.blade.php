@extends('template1')



    @section('active_boards')

        active

    @endsection


     @section('page_title')

        Project Details

    @endsection

    @section('page_subtitle')

        Your Project Dashboard

    @endsection

        @section('content')
<h2>
        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
    </h2>
 
    {{ $task->description }}
            
        @endsection

