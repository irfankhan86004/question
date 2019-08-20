@extends('layouts.app')

@section('page-title', 'Edit Parent Category')
@section('page-heading', 'Edit Parent Category')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('parentcat') }}">Parent Category</a>
    </li>
    <li class="breadcrumb-item active">
        @lang('app.edit')
    </li>
@stop

@section('content')

@include('partials.messages')
{!! Form::open(['route' => 'parentcat.storeedit', 'files' => true, 'id' => 'parentcat-form' ,'method' =>'POST']) !!}
         

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Question details
                    </h5>
                    
                </div>
                <div class="col-md-9">
                    @include('parentcat.partials.editdetails', ['edit' => false])
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
{!! HTML::script('assets/js/as/choice.js') !!}
{!! JsValidator::formRequest('Vanguard\Http\Requests\Question\CreateParentcatRequest', '#parentcat-form') !!}
   
@stop