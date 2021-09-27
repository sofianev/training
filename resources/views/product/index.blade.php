@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Articles</h1>
        <form action="{{route('propre.commandes')}}" method="GET">
            @csrf
         
            <button type="submit" class="btn btn-primary mb-2"  style="float: right;">mes Commandes</button>

          
    </form>
    </div>
    <div class="row">
        <div class="card  mx-auto">
           
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('product.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>
            </div>
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
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id }}</th>
                                <td>{{ $article->libelle }}</td>
                                <td>{{ $article->prix }}</td>
                                <td>{{ $article->quantit }}</td>
                                <td>{{ $article->status }}</td>
                                <td> 
                                   <form action="{{route('add_to_cart')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                                    <button class="btn btn-success">commander</button>
                                </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection