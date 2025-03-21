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
            <label for="contenu" class="form-label">Resumé</label>
            <textarea id="contenu" class="form-control" rows="4" placeholder="Écrivez votre article ici..." required></textarea>
            @error('resume')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Description</label>
            <textarea id="contenu" class="form-control" rows="3" placeholder="Écrivez votre article ici..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image </label>
            <input type="file" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
