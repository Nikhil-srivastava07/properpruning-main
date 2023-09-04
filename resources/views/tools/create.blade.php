<x-default-layout>

    @section('title')
        Pruning Request
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

    <nav class="navbar navbar-expand-sm bg-dark">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/tools">Tools</a>
            </li>
        </ul>
    </nav>
    <div class="container">
    
        @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card-body">
                <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" 
                 action="{{url('/tools/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-6 mt-2">
                            <label for="name">Tool Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                            @if($errors->has ('name'))
                                <span class="text-danger">{{ $errors->first('name') }} </span>
                            @endif
                        </div><br>
                        <div class="form-group">
                            <label for="image">Tool Image</label>
                            <input type="file" name="image" id="image" class="form-control-file" value="{{old('image')}}">
                            @if($errors->has ('image'))
                                <span class="text-danger">{{ $errors->first('image') }} </span>
                            @endif
                        </div><br>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="{{old('quantity')}}">
                            @if($errors->has ('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" value="{{old('status')}}">
                                <option value="active" >Active</option>
                                <option value="inactive" >Inactive</option>
                            </select>
                            @if($errors->has ('status'))
                                <span class="text-danger">{{ $errors->first('status') }} </span>
                            @endif
                        </div><br>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Add Tool</button>
                        </div>
                <input type="hidden"></form>
                </div>

    </div>



    </x-default-layout>
