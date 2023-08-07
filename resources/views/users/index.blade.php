@extends('Dashborad.dashborad')
@section('content')

<div class="container ">
<h2 class="text-center" style="margin: 40px">Users List</h2>
<div class="row">

        <table class="table">
            <thead>
                <tr>
                <th>Name</th>
                <th>Email</th>
                </tr>

            </thead>
            <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>



            <!-- Add more rows for other user information -->
            </tbody>
        </table>

    </div>
</div>
@endsection

<style>
    .table {
    width: 50%;
    border-collapse: collapse;
    margin-bottom: 20px;
    margin-left: 100px;

    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);


}

/* Style the table headers */
.table th {
    background-color: #f8f9fa;
    padding: 10px;
    text-align: left;
}

/* Style the table rows */
.table td, .table th {
    border: 1px solid #dee2e6;
    padding: 1px;
}
.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>



