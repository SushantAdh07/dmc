@extends('admin.admin_dashboard')
@section('admin')
    <div class="container mt-3">
        <h2>Table Head Colors</h2>
        <p>You can use any of the contextual classes to only add a color to the table header:</p>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Comments</th>
                    <td>News</td>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($comments as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->commentator }}</td>
                        <td>{{ $item->comments }}</td>
                        <td>{{ $item->news->news_title }}</td>
                        <td><a class="btn btn-danger" href="{{ route('approve.comments', $item->id) }}">Approve</a>
                            <a class="btn btn-danger" href="{{ route('delete.comments', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
