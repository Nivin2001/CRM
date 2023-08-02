@extends('Dashborad.dashborad')
{{-- // علشان احكي ان هاد الملف بستخدم هاد layouts --}}

@section('content')

    <div class="container ">

    <h1>Edit coustomers</h1>



    <form action="{{ route('coustomers.update', $coustomers->id) }}" method="POST">

         @csrf
         @method('put')
         @include('coustomers._form',[
            'button_lable'=>'Update  Coustomer '
         ])

</form>
</div>

@endsection
