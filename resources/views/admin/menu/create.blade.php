@extends('admin.layout')
@section('css')
<link href="{!!url('public/assets/plugins/jquery-notifications/css/messenger.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/plugins/jquery-notifications/css/messenger-theme-flat.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="grid simple vertical green">
		<div class="grid-title no-border">
              <h4><span class="semi-bold">Add New Menu Banner</span></h4>
            </div>
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.menu.index')!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					<div class="form-group">						
	                        <label class="form-label">Menu Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="name" value="{!!old('name')!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Icon</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="icon" value="{!!old('icon')!!}" class="form-control">
								</div>
							</div>
                    </div>				
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
				</div>
	        </div>
        </div>

	</div>
	</div>
</div>
@stop
@section('script')
<script src="{!!url('public/assets/plugins/jquery-notifications/js/messenger.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/jquery-notifications/js/messenger-theme-future.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/jquery-notifications/js/demo/demo.js')!!}" type="text/javascript"></script>
<script>
function showErrorMessage(msg){
 Messenger().post({
	message: msg,
	type: 'error',
    showCloseButton: true
	});
}
</script>
 @foreach ($errors->all() as $error) 
	<script>
		showErrorMessage("{!!$error!!}");
	</script>
@endforeach
@stop