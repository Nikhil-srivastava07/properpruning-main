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
        <div class="text-right">
        <div class="container">
            <div class="text-right">
                <a href="tools/add" class="btn btn-dark mt-2">Add Tool</a>
            </div>
        </div>
            <!-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        </tr>
                </tbody>
            </table> -->
    </div>



    </x-default-layout>
