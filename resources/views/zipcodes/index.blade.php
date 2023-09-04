<x-default-layout>

    @section('title')
        Zip Codes
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/zipcode">ZipCode</a>
            </li>
        </ul>
    </nav>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="card-footer d-flex justify-content-end py-6 px-9">
    
        <a href="/zipcode/add" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add ZipCode</a>
    </div>
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>ZipCode</th>
                        <th>State</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($zipcode as $zipcode)
                    <tr>
                        <td>{{$loop->index+1}} </td>
                        <td>{{$zipcode->zipcode}}</td>
                        <td>{{$zipcode->state}}</td>
                        <td>{{$zipcode->status}}</td>
                        <td>
                            <a href="zipcode/{{ $zipcode->id}}/edit" class="btn btn-dark btn-sm">Edit</a>

                            <a href="zipcode/{{ $zipcode->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>

</x-default-layout>