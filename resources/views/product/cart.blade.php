@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Articles</h1>
        <form action="" method="post">
            @csrf
        <button type="submit" class="btn btn-primary mb-2"  style="float: right;">save Commandes</button>
    </form>
    </div>
    <div class="row">
        <div class="card  mx-auto">
           
    
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">libelle</th>
                            <th scope="col">prix</th>
                            <th scope="col">quantit</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $car)
                            <tr>
                                <th scope="row">{{ $car->id }}</th>
                                <td>{{ $car->libelle }}</td>
                                <td>{{ $car->prix }}</td>
                                <td>{{ $car->quantit }}</td>
                                <td>{{ $car->status }}</td>
                                
                            </tr>
                        @endforeach

                        <form action="{{route('add_to_cart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <button class="btn btn-success">commander</button>
                        </form> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection