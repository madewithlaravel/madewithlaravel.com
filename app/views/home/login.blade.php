@section('content')
	<div class="row">
	  <div class="span4 offset4">
	    <div class="well">
	      <legend>Please sign in</legend>
	    	@if (Session::has('login_errors'))
	    		<div class="alert alert-block alert-error fade in">
	    			<button type="button" class="close" data-dismiss="alert">&times;</button>
	    			<p>Username or password incorrect.</p>
	    		</div> 
	    	@endif

	    	@if (Session::has('created'))
	    		<div class="alert alert-block alert-success fade in">
	    			<button type="button" class="close" data-dismiss="alert">&times;</button>
	    			<p>Account created Successfully, please log in now</p>
	    		</div> 
	    	@endif

	    	@if (Session::has('logout_message'))
	    	  <div class="alert alert-block alert-success fade in">
	    	  	<button type="button" class="close" data-dismiss="alert">&times;</button>
	    	  	<p>You have been logged out!</p>
	    	  </div> 
	    	@endif

	      {{ Former::inline_open()->class(''); }}
	        {{ Former::text('email')->placeholder('E-mail')->class('input-block-level');}}
	        {{ Former::password('password')->placeholder('Password')->class('input-block-level')}}
	        <a class="pull-right" href="{{ url('login/forgot')}}">Forgot password?</a>
	        <label class="checkbox">{{ Form::checkbox('remember', 'Remember Me');}} Remember Me</label>
	        {{ Former::submit('Login')->class('btn btn-large btn-block');}}
	      {{ Former::close();}}
	    </div>
	  </div>
	</div>
@stop