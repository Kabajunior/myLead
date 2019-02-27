@extends('products.layout')

@section('title')
    strona głowna
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Zadanie rekrutacyne - lista produktów</h3>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.create')}}">Dodaj nowy produkt</a>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Dodawany</th>
                <th>Modyfikacja</th>
                <th width="300px">Akcja</th>
            </tr>
        </thead>

        @foreach ($products as $product)
       <tbody>

            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->created_at->formatLocalized('%x')}}</td>
                <td>{{$product->updated_at->formatLocalized('%d %B %Y')}}</td>
                <td>
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    @csrf
                    <a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">Edycja</a>
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">usuń</button>
                </form>
                </td>
            </tr>

       </tbody>
            
        @endforeach



    </table>



@endsection