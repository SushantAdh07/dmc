@extends('admin.admin_dashboard')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('all.news') }}"><i style='font-size:24px' class='fas mb-3'>&#xf55a;</i></a>
                    <h4 class="header-title">Edit News</h4>
                    <form action="{{ route('update.news', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="mb-3 col-md-6">

                                <label for="inputState" class="form-label">Category</label>
                                <select name="category_id" id="inputState" class="form-select">
                                    <option>Choose</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach


                                </select>

                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputState" class="form-label">Admin</label>
                                <select name="user_id" id="inputState" class="form-select">
                                    <option>Choose</option>
                                    @foreach ($adminuser as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">News Title</label>
                            <input value="{{ $news->news_title }}" name="news_title" type="text" class="form-control"
                                id="inputAddress">
                        </div>

                        <div class="mb-3">
                            <label for="example-textarea" class="form-label">News Description</label>
                            <textarea name="news_details" class="form-control" id="example-textarea" rows="5">{{ $news->news_details }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Image</label>
                            <input type="file" name="image" id="example-fileinput" class="form-control">

                        </div>
                        <div class="mb-3">
                            <img style="width: 300px;" src="{{ asset($news->image) }}" alt="image">
                        </div>

                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Tags</label>
                            <input value="{{ $news->tags }}" name="tags" type="text" class="form-control"
                                id="inputAddress">
                        </div>
                        <div class="form-check mb-2 form-check-primary">
                            <input name="breaking_news" class="form-check-input" type="checkbox" value="1"
                                id="customckeck1" checked>
                            <label class="form-check-label" for="customckeck1">Breaking News</label>
                        </div>
                        <div class="form-check mb-2 form-check-primary">
                            <input name="top_slider" class="form-check-input" type="checkbox" value="1"
                                id="customckeck1" checked>
                            <label class="form-check-label" for="customckeck2">Top Slider</label>
                        </div>
                        <div class="form-check mb-2 form-check-primary">
                            <input name="first_three" class="form-check-input" type="checkbox" value="1"
                                id="customckeck1" checked>
                            <label class="form-check-label" for="customckeck3">First Three</label>
                        </div>
                        <div class="form-check mb-2 form-check-primary">
                            <input name="first_nine" class="form-check-input" type="checkbox" value="1"
                                id="customckeck1" checked>
                            <label class="form-check-label" for="customckeck4">First Nine</label>
                        </div>






                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
