@extends('layout.admin')
@section('content')
<div class="container">
    <table class="table w-100 table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th style="width: 20rem">Categories</th>
                <th style="width: 5rem">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($oeuvres as $oeuvre)
                <tr>
                    <td>{{ $oeuvre->titre }}</td>
                    <td class="text-nowrap">{{ $oeuvre->categories->titre }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.oeuvres.modifier', ['id' => $oeuvre->id]) }}"
                            class="btn btn-primary">Modifier</a>

                        <form action="{{ route('admin.oeuvres.supprimer.traitement', [id => $oeuvre->id]) }}"
                            method="POST">

                            @csrf

                            <button type="submit" class="btn btn-danger">Supprimer</button>

                        </form>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
