@extends('layout.admin')
@section('content')
<div class="container">

    <h2>Ajouter une Oeuvre</h2>
    <p>{{$oeuvre->titre}}</p>

    <form action="{{ route('admin.oeuvres.ajouter.traitement') }}" method="POST" enctype="multipart"
        class="shadow p-4 bg-white">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" value="{{old('titre',$oeuvre->titre)}}" id="titre" class="form-control" placeholder="Entrez le titre de l'oeuvre" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" value="{{old('slug',$oeuvre->slug)}}" id="slug" class="form-control" placeholder="Entrez le slug" required>
            @error('slug')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="categorie_id" class="form-label">Catégorie</label>
            <select id="categorie_id" name="categorie_id" class="form-control form-select" required>
                <option value=""selected>Selectionner une categorie</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                @endforeach
            </select>

            @error('categorie_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Artiste</label>
            <input type="text" value="{{old('artiste',$oeuvre->artiste)}}" id="artiste" class="form-control">
            @error('artiste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Annee de fabrication</label>
            <input type="text" value="{{old('annee de fabrication',$oeuvre->annee_de_fabrication)}}" id="annee de fabrication" class="form-control">
            @error('annee de fabrication')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Date d'acquisition</label>
            <input type="text" value="{{old('date acquisition',$oeuvre->date_acquisition)}}" id="date acquisition" class="form-control">
            @error('date acquisition')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Prix estimé</label>
            <input type="text" value="{{old('prix estime',$oeuvre->prix_estime)}}" id="prix estime" class="form-control">
            @error('prix estime')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Description</label>
            <textarea id="contenu" class="form-control" rows="3" placeholder="Écrivez votre oeuvre ici..." required></textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Photo </label>
            <input type="file" value="{{old('photo',$oeuvre->photo)}}" id="photo" class="form-control">
            @error('photo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
