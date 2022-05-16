@include("header")
<div class="container pt-5">

<form action="/store" method="post" style="border: 1px solid">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@csrf
<h4 style="colour:red">  Ragister Here</h4>
<div class="row pt-5">
  <div class="col-3">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name" >
  </div>
  <div class="col-3">
    <input type="text" class="form-control" placeholder="email" aria-label="email"  name="email">
  </div><br> <br> <br>
  <div class="col-3">
  <input type="date" id="birthday" name="date_of_birth">
  </div>
  <div class="col-3">
    <input type="text" class="form-control" placeholder="address" aria-label="address"  name="address">
  </div>
  <div class="col-3">
  <select name="gender">
    <option value="" name="gender">SelectGender</option>
    <option value="0">Male</option>
    <option value="1">Female</option>
</select>
  </div>
  <div class="col-3">
    <input type="text" class="form-control" placeholder="mobilenumber" aria-label="mobilenumber"  name="mobilenumber">
  </div>
  <div class="col-3">
    <input type="text" class="form-control" placeholder="adhar_number" aria-label="adhar_number"  name="adhar_number">
  </div>
  <div class="form-group mb-3">select hobbies <br>
                                <input type="checkbox" name="hobbies" value="CRICKET"> CRICKET <br>
                                <input type="checkbox" name="hobbies" value="FOOTBALL"> FOOTBALL <br>
                                <input type="checkbox" name="hobbies" value="SWIMMING"> SWIMMING <br>
                                <input type="checkbox" name="hobbies" value="KABBADI"> KABBADI <br>
                                <input type="checkbox" name="hobbies" value="CARROM"> CARROM 
  </div>
  <div class="col-3">
    <input type="file" class="form-control" placeholder="profile_picture" aria-label="profile_picture"  name="profile_picture">
  </div><br><br>
  <button type="submit" style="height:30px; width:100px">submit</button>
</div>
</form>
</div>

@include('footer')