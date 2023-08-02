@extends('Dashborad.dashborad')
 {{-- @extends('coustomers.index') --}}
 {{-- @extends('Layouts.master') --}}
 {{-- // علشان احكي ان هاد الملف بستخدم هاد layouts --}}
 @section('title','classrooms')
 @section('content')
 
<h1>Add Coustomers</h1>
@if($errors->any())
{{-- اذا كان  يوجد اي ايرور  --}}
{{-- //validation --}}
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error )
    <li> {{$error}} </li>

    @endforeach
     </div>
     @endif


     <form  action={{route('coustomers.store')}}  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            @csrf

     @include('coustomers._form',[
        'button_lable'=>'Add Coustomer'
     ])

</form>
</div>

@endsection






