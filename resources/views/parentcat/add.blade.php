@extends('layouts.app')

@section('page-title', 'Add Parent Category')
@section('page-heading', 'Add Parent Category')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('parentcat') }}">Parent Category</a>
    </li>
    <li class="breadcrumb-item active">
        @lang('app.create')
    </li>
@stop

@section('content')

@include('partials.messages')

     {!! Form::open(['route' => 'parentcat.store', 'files' => true, 'id' => 'parentcat-form' ,'method' =>'POST']) !!}
      

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Parent Category details
                    </h5>
                    
                </div>
                <div class="col-md-9">
                    @include('parentcat.partials.details', ['edit' => false])
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
{!! Form::close() !!}

<br>
@stop

@section('scripts')
{!! JsValidator::formRequest('Vanguard\Http\Requests\Question\CreateParentcatRequest', '#parentcat-form') !!}


   
@stop