
   @extends('layouts.dashboard')
    @section('content')
    <h3>Create Produit</h3>

        <form action="{{ route('admin.Produits.store') }}" method="POST">
            @csrf
            <label for="id_cat">Categories</label>
            <select class="form-control" name="id_cat" id="id_cat">
                @foreach ($categories as $c )
                <option name="id_cat" value="{{ $c->id }}">{{ $c->nom }}</option>
                @endforeach
            </select>
            <label for="name">Name</label> <br>
            <input type="text" class="form-control" required name="name"> <br>
            <label for="">Quantite</label> <br>
            <input type="number" class="form-control" required name="quantite"> <br>
            <label for="">Prix</label> <br>
            <input type="number" class="form-control" required name="prix"> <br> <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>


 @endsection
