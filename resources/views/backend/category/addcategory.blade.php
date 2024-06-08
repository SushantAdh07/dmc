@extends('admin.admin_dashboard')
@section('admin')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Gutters</h4>
                <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                <form action="{{route('store.category')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputEmail4" class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="inputEmail4">
                        </div>
                        
                    </div>

                    

                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

@endsection