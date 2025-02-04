@extends('layout.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Edit new information</p>
        <form action="{{ url('/user')}}" method="post">
          @csrf
          @method('put')
          <input type="hidden" name="id" value="{{$user -> id}}">
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full Name"  value="{{$user->name}}"/>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}"/>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
          <div class="row">

            <!-- /.col -->
            <div class="col-12">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">submit</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection
