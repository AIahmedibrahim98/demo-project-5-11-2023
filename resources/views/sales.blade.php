@extends('layouts.master')
@section('header', 'Sales Agents')
@section('title', 'Sales')

@section('content')
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    @foreach ($agents['ahmed'] as $month => $val)
                        <th scope="col">{{ $month }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($agents as $name=>$targets)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $name }}</td>
                        @foreach ($targets as $amount)
                            <td>{{ $amount }}</td>
                        @endforeach
                    </tr>

                @empty
                @endforelse

            </tbody>
        </table>
    </div>

@endsection
