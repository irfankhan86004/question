@extends('layouts.app')

@section('page-title', trans('app.dashboard'))
@section('page-heading', trans('app.dashboard'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('app.dashboard')
    </li>
@stop

@section('content')
<style>
.exam_button {
    color: #fff;
    background-color: #232e6e;
    border-color: #232e6e;
}

.exam_button:hover {
    color: #fff;
    background-color: #232e6e;
    border-color: #232e6e;
}
</style>
@include('partials.messages')
<div class="question-list">


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="panel-heading"></div>
					<div class="card-body">
							
						<form name='frm' id='frm' action='#'>	
							
							
							<div id='questions_next' class="questions-choice">
								
								@foreach ($questions as $question)
									
									<h3>{{ $question->category->parentCategory->name }}</h3><br>
									<h4>{{ $question->category->name }}</h4>
									<span id="sentence-error" class="invalid-feedback"></span>
									@if($question->category->name == 'Numeracy/Literacy') 
										@if($question->id ==109)
											<div><h5>{{ $question->category->story }}</h5></div>
										@elseif($question->id ==110)
											<div><h5>A cup of coffee costs me R22.00. I buy a cup of coffee 4 times a week</h5></div>
										@elseif($question->id ==111)
											<div><h5>Coffee + a sandwich costs R60.</h5></div>
										@endif	
											
									@endif		
									<h4>Question: {{ $question->sentence }}</h4>
															 
									@foreach ($question->answer as $answer)
										<div class="custom-control custom-checkbox">
											<input type="radio" name="answer" value="{{$answer->id}}">{{ $answer->answer}}
										</div>
									@endforeach
								@endforeach	
							</div>
						</form>
					</div>
				
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
	<script>
		
		
	</script>	
@stop