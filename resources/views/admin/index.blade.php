@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Latest News</div>

                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <td scope="col" width="60">#</td>
                                    <td scope="col" width="60">Name</td>
                                    <td scope="col" width="200">Created By</td>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($news as $n)

                                <tr>
                                    <th>{{ $n->newsid }}</th>
                                    <th>{{ $n->title }}</th>
                                    <th>{{ $n->content }}</th>
                                    <th>{{ $n->date }}</th>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
