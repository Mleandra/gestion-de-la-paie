@extends('templates_gestion')
@section('active')
    <li class="nav-item ">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('add')}}">
            <i class="material-icons">person</i>
            <p>Ajouter un employer</p>
        </a>
    </li>
    <li class="nav-item active ">
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
        <a class="navbar-brand" href="#pablo">Liste des employers</a>
    </div>
@endsection
@section('contenu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Employé</h4>
                        <p class="card-category"> {{ date('D d M Y') }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>ID</th>
                                <th> Nom et Prenom</th>
                                <th>N° de CNI</th>
                                <th>Ville</th>
                                <th> Poste</th>
                                <th>Salaire</th>
                                <th>Action </th>
                                </thead>
                                <tbody>
                                @foreach($employes as $employe)
                                    <tr>
                                        <td>{{$employe->id}}</td>
                                        <td>{{$employe->nom}} {{$employe->prenom}}</td>
                                        <td>{{$employe->cni}}</td>
                                        <td>{{$employe->ville}}</td>
                                        <td>{{$employe->poste->nom}}</td>
                                        <td class="text-primary">{{$employe->poste->salaire}} FCFA</td>
                                        <td class="flex-row" > <form method="post" action="#"><button type="submit" class=" btn btn-primary bg-danger">Absent</button>{{@csrf_field()}}</form> <a href="{{route('employer.show', $employe->id )}}" class=" btn btn-primary bg-gray-500">Gerer</a></td>
                                    </tr>

                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
