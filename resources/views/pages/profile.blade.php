@extends('layouts.authapp')

@section('content')
    <div class="row p-3">
        <div class="col-md-5 mr-auto">
            <div class="card">
                <div class="card-title">
                    <h2 class="m-3">Profile Information</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateprofile') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>Fullname</small></strong>
                            </label>
                            <input type="text" class="form-control" value="{{ $user->name }}" name="fullname" disabled>
                        </div>
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>Email</small></strong>
                            </label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback d-block" role="alert">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>Occupation</small></strong>
                            </label>
                            <input type="text" class="form-control" name="occupation">
                        </div>
                        <div class="profile-photo">
                            <div>Profile picture</div>
                            <img src="../../assets/img/photo2.jpg">
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-danger pull-right" type="submit" style="border-radius: 0"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-title">
                    <h2 class="m-3">Security Information</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>Password</small></strong>
                            </label>
                            <input type="password" class="form-control" name="oldpassword" >
                        </div>
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>New Password</small></strong>
                            </label>
                            <input type="password" class="form-control" name="newpassword1" >
                        </div>
                        <div class="form-group">
                            <label for="reg_email">
                                <strong class="text-ash"><small>Confirm Password</small></strong>
                            </label>
                            <input type="password" class="form-control" name="newpassword2">
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-danger pull-right" style="border-radius: 0"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection