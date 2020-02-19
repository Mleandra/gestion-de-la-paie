@extends('templates_gestion')
@section('active')
    <li class="nav-item  ">
        <a class="nav-link" href="{{route("dashboard")}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('add')}}">
            <i class="material-icons">person</i>
            <p>Ajouter un employer</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('gestion')}}">
            <i class="material-icons">content_paste</i>
            <p>Liste des employers</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('management')}}">
            <i class="material-icons">content_paste</i>
            <p>management</p>
        </a>
    </li>
    <li class="nav-item  ">
        <a class="nav-link" href="{{route('fiche')}}">
            <i class="material-icons">description</i>
            <p>fiche</p>
        </a>
    </li>

@endsection

@section('espace_nom')
    <div class="navbar-wrapper">
        <a class="navbar-brand" href="#">Ajouter un employer</a>
    </div>
@endsection
@section('contenu')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <a href="{{route('conge.nouveau')}}" class="btn btn-primary">Autoriser un congé</a>
        <div class="mt-2">
            <p class="font-medium text-xl my-2">Information de l'employé</p><br><br>
            <div class="divider"></div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Nom :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->nom}}</span>
            </div><br><br>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Prenom :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->prenom}}</span>
            </div><br><br>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Sexe :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->sexe}}</span>
            </div><br><br>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Telephone :</span>
                <span class="font-normal text-gray-700 mx-4">+237 {{$employe->telephone}}</span>
            </div><br><br>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Addresse :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->ville}} - {{$employe->adresse}}</span>
            </div>

        </div><br><br>

        <div class="mt-6">
            <p class="font-medium text-xl my-2">Information professionel</p><br><br>
            <div class="divider"></div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Poste :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->poste->nom}}</span>
            </div><br><br>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Salaire :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->poste->salaire}} FCFA</span>
            </div><br><br>

        </div>



        </div>
    </div>
    </div>

@endsection

