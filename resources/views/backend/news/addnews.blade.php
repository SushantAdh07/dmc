@extends('admin.admin_dashboard')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add News</h4>
                    <p class="text-muted font-13">Please fill everything below, choose check boxes as necessary!</p>

                    <form action="{{ route('store.news') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">

                                <label for="inputState" class="form-label">Category</label>
                                <select name="category_id" id="inputState" class="form-select">
                                    <option>Choose</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
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
                            <input name="news_title" type="text" class="form-control" id="inputAddress">
                        </div>

                        <div class="mb-3">
                            <label for="example-textarea" class="form-label">News Description</label>
                            <textarea name="news_details" class="form-control" id="example-textarea" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Image</label>
                            <input type="file" name="image" id="example-fileinput" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Tags</label>
                            <input name="tags" type="text" class="form-control" id="inputAddress">
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
