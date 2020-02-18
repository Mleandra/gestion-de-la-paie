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
        <a class="nav-link" href="./typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
        </a>
    </li>
@endsection

@section('espace_nom')
    <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Ajouter un employer</a>
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
            <p class="font-medium text-xl my-2">Information de l'employé</p>
            <div class="divider"></div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Nom :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->nom}}</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Prenom :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->prenom}}</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Sexe :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->sexe}}</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Telephone :</span>
                <span class="font-normal text-gray-700 mx-4">+237 {{$employe->telephone}}</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Addresse :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->ville}} - {{$employe->adresse}}</span>
            </div>

        </div>

        <div class="mt-6">
            <p class="font-medium text-xl my-2">Information professionel</p>
            <div class="divider"></div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Poste :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->poste->nom}}</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Salaire :</span>
                <span class="font-normal text-gray-700 mx-4">{{$employe->poste->salaire}} FCFA</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Departement :</span>
                <span class="font-normal text-gray-700 mx-4">Ventes et publicité</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Issue :</span>
                <span class="font-normal text-gray-700 mx-4">Rien a signaler</span>
            </div>

        </div>

        <div class="mt-6">
            <p class="font-medium text-xl my-2">Profil sociale</p>
            <div class="divider"></div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">En location :</span>
                <span class="font-normal text-gray-700 mx-4">Oui</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Stat matrimonial :</span>
                <span class="font-normal text-gray-700 mx-4">Marié(e)</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Nombre d'enfants :</span>
                <span class="font-normal text-gray-700 mx-4">12</span>
            </div>
            <div class="flex sm:flex-wrap mt-2">
                <span class="font-semibold text-teal-800">Assurance Maladie :</span>
                <span class="font-normal text-gray-700 mx-4">Oui</span>
            </div>

        </div>
    </div>
    </div>

@endsection

