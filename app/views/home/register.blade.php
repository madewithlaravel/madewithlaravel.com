@section('content')
	<div class="row">
	  <div class="span4 offset4">
	    <div class="well">
	     	<legend>Please Register for an account</legend>
			{{ Former::inline_open()->class(''); }}
				{{ Former::text('email')->placeholder('E-mail')->class('input-block-level');}}
				{{ Former::password('password')->placeholder('Password')->class('input-block-level')}}
				{{ Former::submit('Sign up')->class('btn btn-large btn-block');}}
			{{ Former::close();}}
	    </div>
	  </div>
	</div>
@stop