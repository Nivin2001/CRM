@extends('Dashborad.dashborad')
{{-- // علشان احكي ان هاد الملف بستخدم هاد layouts --}}

@section('content')

    <div class="container ">

    <h1>Edit coustomers</h1>



    <form action="{{ route('coustomers.update', $coustomers->id) }}" method="POST">

         @csrf
         @method('put')


    <div class="form-floating mb-4 mt-3">
        <input type="text" name="name" value="{{  $coustomers->name }}" class="form-control @error('name') is-invalid @enderror">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <label for="name">Name</label>
      </div>

      <div class="form-floating mb-4">

        <input type="text" value="{{$coustomers->email}}" @class(['form-control', 'is-invalid' => $errors->has('email')])id="email" name ="email" placeholder="enter email ">
        @error('email')
        <div class="text-danger">{{$message}} </div>

        @enderror
        <label for="email">email</label>
      </div>

      <div class="form-floating mb-4">
        <input type="text" value="{{$coustomers->phone}}" @class(['form-control', 'is-invalid' => $errors->has('phone')]) id="phone" name ="phone" placeholder="enter phone ">
        @error('phone')
        <div class="text-danger">{{$message}} </div>
        @enderror
        <label for="subject">phone</label>
      </div>


      <div class="form-floating mb-4">
        <input type="text" value="{{$coustomers->address}}" @class(['form-control', 'is-invalid' => $errors->has('address')]) id="addrees" name ="address" placeholder="enter address ">
        @error('address')
        <div class="text-danger">{{$message}} </div>
        @enderror
        <label for="subject">address</label>
      </div>




      <div class="form-floating mb-4">
        <input type="text" value="{{$coustomers->country}}" @class(['form-control', 'is-invalid' => $errors->has('country')]) id="country" name ="country" placeholder=" enter country ">
        @error('countrys')
        <div class="text-danger">{{$message}} </div>
        @enderror
        <label for="country">country</label>
      </div>


      <div class="form-floating mb-4">
        <input type="text" value="{{$coustomers->city}}"  @class(['form-control', 'is-invalid' => $errors->has('city')]) id="city" name ="city" placeholder="enter city ">
        @error('city')
        <div class="text-danger">{{$message}} </div>
        @enderror
        <label for="city"> city</label>
      </div>

      <div class="form-floating mb-4">
        <input type="text" value="{{$coustomers->career}}"  @class(['form-control', 'is-invalid' => $errors->has('career')]) id="career" name ="" placeholder="enter career">
        @error('career')
        <div class="text-danger">{{$message}} </div>
        @enderror
        <label for="career">career</label>
      </div>

      <button type="submit" class="btn btn-primary ">Edit Coustomers</button>

    </div>



</form>
</div>

@endsection
