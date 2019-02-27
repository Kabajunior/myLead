@extends('products.layout')

@section('title')
    edytowanie produktu
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>edycja produktu</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> zwrot</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Błąd</strong> <br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('products.update',$product->id) }}" method="POST">

        @csrf

        @method('PUT')
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nazwa:</strong>

                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Opis">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Opis:</strong>

                    <textarea class="form-control" style="height:150px" name="description" placeholder="opis">{{ $product->description }}</textarea>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Zapis</button>

            </div>

        </div>
    </form>

@endsection
