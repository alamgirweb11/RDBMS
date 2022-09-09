@extends('layouts.master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">Project Name</th>
                <th scope="col">Environment Details</th>
                <th scope="col">Development Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $project->name }}</td>
                    <td>
                        <ul>
                            @foreach ($project->environments as $environment)
                                <li>{{ $environment->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($project->developments as $development)
                                <li>{{ $development->commit_hash }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
