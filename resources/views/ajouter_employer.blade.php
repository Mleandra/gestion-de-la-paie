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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ajouter un employer</h4>
                        <p class="card-category">Complete les differents champs</p>
                    </div>
                    <div class="card-body">
                        <form>
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nom</label>
                                        <input type="text" name="nom"  value="{{old('nom')}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Prenom</label>
                                        <input type="text" name="prenom" value="{{old('prenom')}}"class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adresse Mail</label>
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">N° de Telephone</label>
                                        <input type="text" value="{{old('telephone')}}" name="telephone" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adresse</label>
                                        <input type="text" value="{{old('adresse')}}" name="adresse"class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">N° de CNI</label>
                                        <input type="text"value="{{old('cni')}}" name="cni" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" name="">Date de naissance </label>
                                        <input type="date" value="{{old('date_naissance')}}" name="date_naissance" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Lieu de naissance </label>
                                        <input type="text" value="{{old('lieu_naissance')}}"  name ="lieu_naissance" class="form-control" required>
                                    </div>
                                </div><br>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                       <select name="postes" class="custom-select " required>
                                           <option  selected disabled>Postes</option>
                                           @foreach($postes as $pos)
                                               <option value="{{$pos->id}}">{{$pos->nom}}</option>
                                           @endforeach

                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">salaire</label>
                                        {{-- recuperer le salire lier au postes--}}
                                        <input type="text" name="salaire" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select  name ="type_id" class="custom-select">
                                            <option selected disabled>Types de contrat</option>
                                            @foreach($type as $pos)
                                                <option value="{{$pos->id}}">{{$pos->nom}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Date d'embauche</label>
                                        <input type="date" name="date_debut" class="form-control"value="{{old('date_debut')}}"required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{-- est disable si le type de contrat  est cdi--}}
                                        <label >Date de fin du contrat</label>
                                        <input type="date" name="date_fin" class="form-control" value="{{old('date_fin')}}" required>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-success pull-right">Ajouter</button>
                            <button type="reset" class="btn btn-info pull-center ">Reset</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

@endsection
