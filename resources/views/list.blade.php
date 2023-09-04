<x-default-layout>

    @section('title')
        Pruning Request List
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

                <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="/pruning-request" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Request</a>
                </div>

                            <table border="1">
                            <thead>
                                <tr>
                                    <th>Id </th>
                                    <th>Full Name </th>
                                    <th>Contact Phone </th>
                                    <th>Email </th>
                                    <th>Address </th>
                                    <th>Address Line 2</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Description</th>
                                    <th>Communication</th>
                                    <th>Upload Video</th>
                                    <th>Upload Audio</th>
                                </tr>
                            </thead>
                                @foreach($pruningrequests as $pruningrequest)
                                <tr>
                                    <td>{{$pruningrequest['id']}} </td>
                                    <td>{{$pruningrequest['Full_name']}} </td>
                                    <td>{{$pruningrequest['Contact_phone']}} </td>
                                    <td>{{$pruningrequest['email']}} </td>
                                    <td>{{$pruningrequest['address_line_1']}} </td>
                                    <td>{{$pruningrequest['address_line_2']}} </td>
                                    <td>{{$pruningrequest['city']}} </td>
                                    <td>{{$pruningrequest['state']}} </td>
                                    <td>{{$pruningrequest['zip_code']}} </td>
                                    <td>{{$pruningrequest['country']}} </td>
                                    <td>{{$pruningrequest['date']}} </td>
                                    <td>{{$pruningrequest['time']}} </td>
                                    <td>{{$pruningrequest['description']}} </td>
                                    <td>{{$pruningrequest['video_file_name']}} </td>
                                    <td>{{$pruningrequest['audio_file_name']}} </td>
                                </tr>
                                @endforeach
                            </table>
</x-default-layout>

