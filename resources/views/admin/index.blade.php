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

                <div class="card mt-4">
                    <div class="card-header">Latest Post</div>

                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <td scope="col" width="60">#</td>
                                <td scope="col" width="60">Title</td>
                                <td scope="col" width="200">Created By</td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $p)

                                <tr>
                                    <th>{{ $p->postid }}</th>
                                    <th>{{ $p->title }}</th>
                                    <th>{{ $p->user->name }}</th>
                                    <th>{{ $p->content }}</th>
                                    <th>{{ $p->date }}</th>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Latest Courses</div>

                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <td scope="col" width="60">#</td>
                                <td scope="col" width="60">Title</td>
                                <td scope="col" width="200">Created By</td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($courses as $c)

                                <tr>
                                    <th>{{ $c->courseid }}</th>
                                    <th>{{ $c->title }}</th>
                                    <th>{{ $c->user->name }}</th>
                                    <th>{{ $c->content }}</th>
                                    <th>{{ $c->date }}</th>
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
