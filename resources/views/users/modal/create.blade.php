<div class="modalx container py-5 h-100 hidden register" id="modalx">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5 form_repeat_l">
            <button class="btn--close-modal register">&times;</button>
            <h2 class="fw-bold mb-2 text-uppercase">Registrar Repartidor</h2>
                <br>
                <form method="POST" enctype="multipart/form-data" action="{{route('user.create')}}" >
                    @csrf
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="name">Nombres</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="surname">Apellidos</label>
                        <input type="text" name="surname" id="surname" class="form-control form-control-lg" required/>
                        @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="email">Correo Electronico</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="phone">Numero Telefonico</label>
                        <input type="text" name="phone" id="phone" class="form-control form-control-lg" required/>
                        @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <br>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrar</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
