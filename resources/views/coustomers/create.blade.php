@extends('Dashborad.dashborad')
 @section('content')

<h1 style="text-align: center">Add Coustomers</h1>
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


     <form style="margin-left:100px " action={{route('coustomers.store')}}  method="post" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
            @csrf



    <div class="form-floating mb-4 mt-3">
        <label for="name">Name :</label>
        <input type="text"   class="form-control @error('name') is-invalid @enderror" id="name"  name="name" placeholder="enter name "  value="{{  old('name' ) }}">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

      </div>

      <div class="form-floating mb-4">
        <label for="email">email :</label>
        <input type="text"  @class(['form-control', 'is-invalid' => $errors->has('email')])id="email" name ="email" placeholder="enter email " value="{{  old('email' ) }}">
        @error('email')
        <div class="text-danger">{{$message}} </div>

        @enderror

      </div>

      <div class="form-floating mb-4">
        <label for="phone">phone :</label>
        <input type="text"  @class(['form-control', 'is-invalid' => $errors->has('phone')]) id="phone" name ="phone" placeholder="enter phone ">
        @error('phone')
        <div class="text-danger">{{$message}} </div>
        @enderror

      </div>


      <div class="form-floating mb-4">
        <label for="address :">address</label>
        <input type="text"  @class(['form-control', 'is-invalid' => $errors->has('address')]) id="addrees" name ="address" placeholder="enter address ">
        @error('address')
        <div class="text-danger">{{$message}} </div>
        @enderror

      </div>




      <div class="form-floating mb-4">

        <label for="country">country :</label>
        <input type="text"  @class(['form-control', 'is-invalid' => $errors->has('country')]) id="country" name ="country" placeholder=" enter country ">
        @error('country')
        <div class="text-danger">{{$message}} </div>
        @enderror

      </div>


      <div class="form-floating mb-4">

        <label for="city"> city :</label>
        <input type="text"  @class(['form-control', 'is-invalid' => $errors->has('city')]) id="city" name ="city" placeholder="enter city ">
        @error('city')
        <div class="text-danger">{{$message}} </div>
        @enderror

      </div>

      <div class="form-floating mb-4">
        <label for="career">career :</label>
        <input type="text"   @class(['form-control', 'is-invalid' => $errors->has('career')]) id="career" name ="" placeholder="enter career">
        @error('career')
        <div class="text-danger">{{$message}} </div>
        @enderror

      </div>
      <button type="submit" class="btn btn-primary ">Add Coustomers</button>
    </div>


</form>
</div>

@endsection
