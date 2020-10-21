<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<form class="row" id="test">
			<div class="col-12 mt-4">
				<label class="w-100">
					<label>input 1 </label>
					<label class="d-none messageError">error</label>
					<input type="text" class="form-control" id="input1" name="input1" required="">
				</label>
			</div>
			<div class="col-12 mt-4">
				<label class="w-100">
					<label>input 2 </label>
					<label class="d-none messageError">error</label>
					<input type="text" class="form-control" id="input2" name="input2">
				</label>
			</div>
			<div class="col-12 mt-4">
				<label class="w-100">
					<label>input 3 </label>
					<label class="d-none messageError">error</label>
					<input type="text" class="form-control" id="input3" name="input3" required="">
				</label>
			</div>
			<div class="col-12 mt-4">
				<button type="button" class="btn btn-success" id="sendForm">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	$('input').on('keypress',function(){
		$(this).parent().find('.messageError').addClass('d-none');
	})
	$('#sendForm').on('click',function(){
		var check = true;
		$('.messageError').addClass('d-none');
		$( "form#test input" ).each(function( index ) {
			var required = $(this).attr('required');
		 	var value = $(this).val();
		 	var id = $(this).attr('id');
		 	if(!value && required){
		 		check = false;
		 		$(this).parent().find('.messageError').removeClass('d-none');
		 	}
		});
		if(check){
			$('form#test').submit();
		}
	})
</script>