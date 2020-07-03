@extends('layouts.app')

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign Up To Receive Offers</h1>
          <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <label for="firstnameinput">Email address</label>
               <input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="John">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
               <label for="lastnameinput">Phone Number</label>
               <input type="text" class="form-control" id="lastnameinput" name="lname" placeholder="Doe">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <label for="emailinput">Email address</label>
               <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
               <label for="phoneinput">Phone Number</label>
               <input type="phone" class="form-control" id="phoneinput" name="phone" placeholder="xxx-xxx-xxxx">
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <p>
                  In signing up I acknowledge that I am 18 years of age orolder, want to receive email offers form
                  Billy's and if I select to join Dine Rewards, agree to the terms and conditions of the program.
                </p>
              </div> 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
              </div> 
            </div>
          </div>                      
          </form>        
        </div>                       
      </div>
    </div>
  </div>
    

@endsection