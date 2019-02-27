@extends('products.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="text-align:center"> Informacje o produkcie</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> zwrot</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nazwa:</strong>

                {{ $product->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Opis:</strong>

                {{ $product->description }}

            </div>

        </div>

    </div>

    @if($product->prices->count())

    <div class="box">
            <strong>Cena</strong>
        <table class="table table-bordered">
            
            @foreach ($product->prices as $price)
                <form action="{{$price->id}}" method="POST">
                   
                      <td>{{$price->price}}</td>
                   
                </form>  
            @endforeach
        </table>
    </div>

    @endif

@endsection