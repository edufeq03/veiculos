@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md 12">

            <div class="form-row">
                    <div class="form-group col-md-5">
                    Voce visualizou o <strong>{{ $modelo->modelo }}</strong>
                    </div>
                </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label for="inputEmail4">Marca</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Marca">
                    </div>
                    <div class="form-group col-md-5">
                    <label for="inputPassword4">Modelo</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Modelo">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputPassword4">Ano</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Ano">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputEmail4">Motor</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Motor">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputPassword4">Cor</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Cor">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputPassword4">Portas</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Portas">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputPassword4">Combustivel</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Combustivel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
        </div>
    </div>
@endsection