@extends('admin.admin_dashboard')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Updates</h4>

                    @foreach ($socials as $item)
                        <a href="//{{ $item->socials }}" target="_blank">Link-1</a>
                    @endforeach

                    <form action="{{ route('store.link') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Social Media Link</label>
                                <input type="text" name="socials" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                    </form>

                    <hr>
                    @php
                        $ytlinks = App\Models\Youtube::latest()->get();
                    @endphp

                    @foreach ($ytlinks as $item)
                        <a href="//{{ $item->ytlink }}" target="_blank">Youtube Link</a>
                        <a href="{{ route('delete.youtube', $item->id) }}" class="btn btn-primary">Delete</a>
                    @endforeach

                    <form action="{{ route('store.ytlink') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputEmail4" class="form-label">Youtube</label>
                                <input type="text" name="ytlink" class="form-control">
                            </div>

                        </div>



                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
