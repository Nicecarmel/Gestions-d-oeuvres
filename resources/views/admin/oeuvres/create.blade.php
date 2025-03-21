@extends('layout.admin')
@section('content')
<div class="container">

    <h2>Ajouter une Oeuvre</h2>

    <form action="{{ route('admin.oeuvres.ajouter.traitement') }}" method="POST" enctype="multipart"
        class="shadow p-4 bg-white">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" id="titre" class="form-control" placeholder="Entrez le titre de l'oeuvre" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" id="slug" class="form-control" placeholder="Entrez le slug" required>
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
            <textarea id="contenu" class="form-control" rows="4" placeholder="Écrivez votre article ici..." required></textarea>
            @error('artiste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Annee de fabrication</label>
            <textarea id="contenu" class="form-control" rows="4" placeholder="Écrivez votre article ici..." required></textarea>
            @error('annee de fabrication')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Date d'acquisition</label>
            <textarea id="contenu" class="form-control" rows="4" placeholder="Écrivez votre article ici..." required></textarea>
            @error('prix acquisition')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Prix estimé</label>
            <textarea id="contenu" class="form-control" rows="4" placeholder="Écrivez votre article ici..." required></textarea>
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
            <input type="file" id="image" class="form-control">
            @error('photo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
