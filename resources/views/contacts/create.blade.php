@extends('layouts.default', ['title'=>'Contact'])

@section('content')    
    <div class="container">
    	<div class="row">
    		
    	</div>
    	<div class="row">
    		
    		<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
    			<h2>Get In Touch</h2>
    			<p class="form-text text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}"> ask for help.</a></p>
    			<form action="{{ route('contact') }}" method="POST">
                    @csrf
    				<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control {{ $errors->has('name')?'is-invalid': '' }}" id="name" name="name" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
					 </div>
					 <div class="form-group">
					    <label for="email">E-mail</label>
					    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid': '' }}" id="email" name="email" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
					 </div>
					 <div class="form-group">
    					<textarea class="form-control {{ $errors->has('message')?'is-invalid': '' }}" id="message" name="message" rows="7">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
					 </div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit&raquo;</button>
					  
    			</form>
    		</div>
    		
    	</div>
    </div>
    
@endsection