@extends('voyager::master')

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <h4 class="text-center card-header "> Detaille Product </h4>
                    <div class="col align-self-start">
                        <div class="py-3 px-4">
                            <h4>Titre</h4>
                            {{ $produit->titre }}
                        </div>
                    </div>
                    <div class="col align-self-start">
                        <div class="py-3 px-4">
                            <h4>Article type</h4>
                            {{ $produit->typeArticle }}
                        </div>

                    </div>
                    <div class="col align-self-start">
                        <div class="py-3 px-4">

                            <h4>Prix</h4>
                            {{ $produit->prix }}
                        </div>

                    </div>
                    <div class="col align-self-start">
                        <div class="py-3 px-4">
                            <h4>description</h4>
                            {{ $produit->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
        @endsection
