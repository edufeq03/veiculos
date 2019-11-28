@extends('layouts.app')

@section('content')
<style>
    .btn-action {
      padding: 5px;
      margin-left: 5px;
      float: right;
    }
  </style>
    <div class="container">
        <div class="col-md 12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                        <tr>
                            <th scope="row">{{ $modelo->id }}</th>
                            <td>{{ $modelo->modelo }}</td>
                            <td>{{ $modelo->status }}</td>
                            <td>
                                <a href="{{ route('modelos.show', [ $modelo -> id]) }}" class="btn btn-xs btn-secondary btn-action">
                                <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                <a href="{{ route('modelos.edit', [ $modelo -> id]) }}" class="btn btn-xs btn-primary btn-action">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="{{ route('modelos.destroy', [ $modelo -> id]) }}" class="btn btn-xs btn-danger btn-action">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection