@extends('Dashborad.dashborad')
@section('content')

<div class="container ">
<h2 class="text-center" style="margin: 40px">Customers List</h2>
<div class="row">
{{--
    <form action="submit" method="GET">
        <label for="search">Search by Name:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Search</button>
    </form> --}}

  <!-- Table for Displaying Records -->
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

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
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->country }}</td>
                <td>{{ $customer->city}}</td>
                <td>{{ $customer->career }}</td>

            <td class="d-flex justify-content-between">

                <a href="{{ route('coustomers.edit', $customer->id) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i> Edit
                </a>

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
{{-- 
{{ $customers->links() }} <!-- Pagination Links --> --}}
