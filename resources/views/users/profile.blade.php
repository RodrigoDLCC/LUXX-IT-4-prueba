@extends('layouts.user')
@section('title','Perfil')
@section('content')

<div class="container">
    <div class="row gutters-sm">
      <div class="col-md-4 d-none d-md-block">
        <div class="card">
          <div class="card-body">
            <nav class="nav flex-column nav-pills nav-gap-y-1">
              <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded form-color-black color-active">
                Informacion de Perfil
              </a>
              <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded form-color-black color-active">
                Gestion de la Cuenta
              </a>
              <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded form-color-black color-active">
                Mis Pedidos
              </a>
              <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded form-color-black color-active">
                Direccion de Entrega
              </a>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header border-bottom mb-3 d-flex d-md-none">
            <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
              <li class="nav-item">
                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
              </li>
              <li class="nav-item">
                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
              </li>
              <li class="nav-item">
                <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
              </li>
              <li class="nav-item">
                <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
              </li>
              <li class="nav-item">
                <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
              </li>
            </ul>
          </div>

          <div class="card-body tab-content">
            <div class="tab-pane active" id="profile">
              <h6>
                INFORMACIÓN DE SU PERFIL</h6>
              <hr>
              <form method="POST" enctype="multipart/form-data" action="{{route('user.update_profile')}}">
                @csrf
                <div class="form-group">
                  <label for="fullName">Nombre completo</label>
                  <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="fullNameHelp" placeholder="Enter your fullname"  value="{{old('fullname',$user->name)}}">
                  <small id="fullNameHelp" class="form-text text-muted">
                    Su nombre puede aparecer por aquí donde se le menciona. Puede cambiarlo o eliminarlo en cualquier momento.</small>
                </div>
                <div class="form-group">
                  <label for="phone">Telefono</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone',$user->phone)}} ">
                </div>
                <div class="form-group">
                  <label for="image">Imagen de Perfil</label>
                  <input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png"/>
                </div>
                <div class="form-group">
                 </div>
                <br>
                <button class="btn active_upd">Actualizar Perfil</button>
              </form>
            </div>
            <div class="tab-pane" id="account">
              <h6>ACCOUNT SETTINGS</h6>
              <hr>
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter your username" value="kennethvaldez">
                  <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                </div>
                <hr>
                <div class="form-group">
                  <label class="d-block text-danger">Delete Account</label>
                  <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
                <button class="btn btn-danger" type="button">Delete Account</button>
              </form>
            </div>
            
            <div class="tab-pane" id="notification">
              <h6>NOTIFICATION SETTINGS</h6>
              <hr>
              <form>
                <div class="form-group">
                  <label class="d-block mb-0">Security Alerts</label>
                  <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                    <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                    <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerability</label>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <label class="d-block">SMS Notifications</label>
                  <ul class="list-group list-group-sm">
                    <li class="list-group-item has-icon">
                      Comments
                      <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                        <label class="custom-control-label" for="customSwitch1"></label>
                      </div>
                    </li>
                    <li class="list-group-item has-icon">
                      Updates From People
                      <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2"></label>
                      </div>
                    </li>
                    <li class="list-group-item has-icon">
                      Reminders
                      <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                        <label class="custom-control-label" for="customSwitch3"></label>
                      </div>
                    </li>
                    <li class="list-group-item has-icon">
                      Events
                      <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                        <label class="custom-control-label" for="customSwitch4"></label>
                      </div>
                    </li>
                    <li class="list-group-item has-icon">
                      Pages You Follow
                      <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                        <label class="custom-control-label" for="customSwitch5"></label>
                      </div>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection




