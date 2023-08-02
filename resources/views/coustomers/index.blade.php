@extends('Dashborad.dashborad')
@extends('layouts.master')


<div class="container ">
<h2 class="text-center">Customers List</h2>
<div class="row">

  <!-- Table for Displaying Records -->


  <table class="table">
    <thead>
        <tr>
            <th><a href="{{ route('coustomers.index', ['sort' => 'name', 'direction' => 'asc']) }}">Name ▲</a></th>
            <th>Email</th>
            <th>Phone</th>
            <th>address</th>
            <th>country</th>
            <th>city</th>
            <th>career</th>
            <th>Icon</th>

        </tr>

    </thead>
    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->country }}</td>
                <td>{{ $customer->city}}</td>
                <td>{{ $customer->career }}</td>

                <td>
                    <a href="{{ route('coustomers.edit', $customer->id) }}" class="btn btn-primary">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </td>

            <td>
                <form action="{{route('coustomers.destroy',$customer->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">
                        <i class="bi bi-trash"></i> Delete
        </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

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

{{ $customers->links() }} <!-- Pagination Links -->
