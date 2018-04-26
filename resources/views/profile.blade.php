@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('profile.update') }}" method="post">
                <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                    <label for="company">Company</label>
                    <input class="form-control" type="text" name="company" id="company" value="{{ $profile->company }}"></input>
                </div>
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label for="Phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" value="{{ $profile->phone  }}"></input>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ $profile->email }}"></input>
                </div>
                <div class="form-group {{ $errors->has('address_line1') ? 'has-error' : '' }}">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address_line1" id="address-line1" value="{{ $profile->address_line1 }}"></input>
                    <input class="form-control" type="text" name="address_line2" id="address-line2" value="{{ $profile->address_line2 }}"></input>
                </div>
                
                <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city" value="{{ $profile->city }}"></input>
                </div>
                <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                    <label for="state">State/Province/District</label>
                    <input class="form-control" type="text" name="state" id="state" value="{{ $profile->state }}"></input>
                </div>
                
                <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                    <label for="zip">Country</label>
                    <input class="form-control" type="text" name="country" id="country" value="{{ $profile->country }}"></input>
                </div>
                <div class="form-group {{ $errors->has('zip') ? 'has-error' : '' }}">
                    <label for="zip">Postal/Zip Code</label>
                    <input class="form-control" type="text" name="zip" id="zip" value="{{ $profile->zip }}"></input>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
                 {{ method_field('PUT') }}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
