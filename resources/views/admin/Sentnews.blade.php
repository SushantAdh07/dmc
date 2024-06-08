@extends('admin.admin_dashboard')
@section('admin')
    <div class="container mt-3">
        <h2>Table Head Colors</h2>
        <p>You can use any of the contextual classes to only add a color to the table header:</p>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>News Title</th>
                    <th>News Details</th>
                    <th>News Image</th>
                    <th>Sender Name</th>
                    <th>Sender Email</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($sentnews as $item)
                    <tr>
                        <td>{{ $item->send_news_title }}</td>
                        <td><a data-bs-toggle="collapse" data-bs-target="#demo">Read More</a>
                            <div id="demo" class="collapse">
                                {{ $item->send_news_details }}
                            </div>
                        </td>
                        <td><img style="width: 100px;" src="{{ asset($item->senderimage) }}" alt=""></td>
                        <td>{{ $item->sendername }}</td>
                        <td>{{ $item->senderemail }}</td>
                        <td><a class="btn btn-danger" href="{{ route('delete.sent-news', $item->id) }}">Delete</a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
