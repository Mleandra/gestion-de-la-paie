@extends('templates_gestion')
@section('active')
    <li class="nav-item  ">
        <a class="nav-link" href="{{route("dashboard")}}">
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
    <li class="nav-item ">
        <a class="nav-link" href="{{route('gestion')}}">
            <i class="material-icons">content_paste</i>
            <p>Liste des employers</p>
        </a>
    </li>
    <li class="nav-item active ">
        <a class="nav-link" href="{{route('management')}}">
            <i class="material-icons">content_paste</i>
            <p>management</p>
        </a>
    </li>

@endsection

@section('contenu')
<div class="container">

    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header card-header-rose">
                <h4 class="card-title">Ajouter postes</h4>
                <p class="card-category"></p>

            </div>
            <div class="card-body">
                  <form action="{{route('newPoste')}}" method="post">
                      {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nom</label>
                                <input  type=" text" name="nom_poste"  value="{{old('Nom')}}"class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Salaire</label>
                                <input  type=" text" name="salaire"  value="{{old('salaire')}}"class="form-control" required>
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
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ajouter un congés</h4>
                    <p class="card-category"></p>

                </div>
                <div class="card-body">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nom du conges</label>
                                    <input  type=" text" name="nom"  value="{{old('nom')}}"class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Est payer</label>
                                    <input type="checkbox" name="est_payer" class="checkbox" value="{{old('est_payer')}}" required>
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
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h4 class="card-title">congadier un employer</h4>
                    <p class="card-category"></p>

                </div>
                <div class="card-body">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="employer"  class="custom-select" required>
                                        <option selected disabled> employer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger pull-right">Congedier</button>
                        <button type="reset" class="btn btn-info pull-center ">Reset</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header card-header-success">
                    <h4 class="card-title">promouvoir  un employer</h4>
                    <p class="card-category"></p>

                </div>
                <div class="card-body">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="employer"  class="custom-select" required>
                                        <option selected disabled> employer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="poste"  class="custom-select">
                                        <option selected disabled>postes</option>
                                    </select>
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
    </div>
</div>
    @endsection
