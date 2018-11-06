@extends('layouts.default', ['title'=>'Contact'])

@section('content')    
    <div class="container">
    	<div class="row">
    		
    	</div>
    	<div class="row">
    		
    		<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
    			<h2>Get In Touch</h2>
    			<p class="form-text text-muted">If you having trouble with this service, please <a href="mailto:tnhherve@gmail.com"> ask for help.</a></p>
    			<form action="" method="POST">
    				<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name">
					 </div>
					 <div class="form-group">
					    <label for="email">E-mail</label>
					    <input type="email" class="form-control" id="email">
					 </div>
					 <div class="form-group">
    					<textarea class="form-control" id="message" rows="7"></textarea>
					 </div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
					  
    			</form>
    		</div>
    		
    	</div>
    </div>
    
@endsection