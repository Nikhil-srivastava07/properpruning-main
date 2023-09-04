<x-default-layout>

    @section('title')
        Zip Codes
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

    <nav class="navbar navbar-expand-sm bg-dark">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/zipcode">ZipCode</a>
            </li>
        </ul>
    </nav>
    <div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
        <div class="card-body">
            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" 
                action="{{url('/zipcode/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-6 mt-2">
                        <label for="name">Zipcode</label>
                        <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{old('zipcode')}}">
                        @if($errors->has ('zipcode'))
                            <span class="text-danger">{{ $errors->first('zipcode') }} </span>
                        @endif
                    </div><br>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">State</label>
                                    <input type="text" name="state" class="form-control form-control-lg form-control-solid" placeholder="State" value="{{old('state')}}">
                                    @if($errors->has ('state'))
                                        <span class="text-danger">{{ $errors->first('state') }} </span>
                                    @endif
                    </div><br>
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
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Submit</button>
                    </div>
            <input type="hidden"></form>
            </div>

</div>

</x-default-layout>