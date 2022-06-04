@extends('voyager::master')

@section('content')

    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-red-500 alert alert">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form action="{{ route('update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $produit->id }}">
                        <h4 class="text-center card-header "> Edit product </h4>
                        <label class="col-form-label text-md-end" for="">Titre</label>
                        <input class="input-group form-control" type="text" value="{{ $produit->titre }}" name="titre"
                            id="">

                        <label class="col-form-label text-md-end" for="">Type Article</label>
                        <input class="input-group form-control" type="text" value="{{ $produit->typeArticle }}"
                            name="typeArticle" id="">

                        <label class="col-form-label text-md-end" for="">Prix</label>
                        <input class="input-group form-control" type="text" value="{{ $produit->prix }}" name="prix"
                            id="">

                        <label class="col-form-label text-md-end" for="">description</label>
                        <input class="input-group form-control" type="text" value="{{ $produit->description }}"
                            name="description" id="">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">update</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    

            @endsection
