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
        <a class="nav-link" href="">
            <i class="material-icons">content_paste</i>
            <p>management</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('management')}}">
            <i class="material-icons">content_paste</i>
            <p>management</p>
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
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Autorisé un congé</h4>
                        <p class="card-category">Complete les differents champs</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('conge.nouveau')}}" method="post">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Employé</label>
                                        <select name="employe" class="custom-select " required>
                                            <option selected disabled>Employé</option>
                                            @foreach($employes as $pos)
                                                <option value="{{$pos->id}}">{{$pos->nom}} {{$pos->prenom}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div     class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Type de Congé</label>
                                        <select name="type" class="custom-select">
                                            <option selected disabled>Selectionnez</option>
                                            @foreach($types as $pos)
                                                <option value="{{$pos->id}}">{{$pos->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="">Date debut</label>
                                        <input type="date" name="date_debut" class="form-control"
                                               value="{{old('date_debut')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- est disable si le type de contrat  est cdi--}}
                                        <label>Date de fin</label>
                                        <input type="date" name="date_fin" class="form-control"
                                               value="{{old('date_fin')}}" required>
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <br>
                                <div class="col-md-12">

                                        {{-- est disable si le type de contrat  est cdi--}}
                                        <label>Est payer</label>
                                        <input type="checkbox" name="est_payer" class="form-control "
                                               value="{{old('est_payer')}}" required>

                                </div>

                            </div>

                            <button type="submit" class="btn btn-success pull-right">Ajouter</button>
                            <button type="reset" class="btn btn-info pull-center ">Reset</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
