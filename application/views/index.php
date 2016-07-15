<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.css">
	<script>
		$(document).ready(function(){
			$.get("/Leads/index_html", function (res){
				$("#users_table").html(res);
			})
			$(".date").datepicker();
		});
		$(document).on("submit", "form", function(e){
			$.post($(this).attr("action"), $(this).serialize(), function(res){
				$("#users_table").html(res);
			});
			return false;
		});
		$(document).on("keyup","input", function(){
		    $(this).submit();        
		});
		$(document).on('change', 'form', function(){
				$(this).submit();
			});
		$(document).on('click', 'button', function(){
			$('#hidden').attr('value', $(this).val());
			$(this).css('background', 'darkgrey');
			$("form").submit();
		})
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
				<form id="search" action="/Leads/search" method="post" class="form-horizontal">
				<input id="hidden" type="hidden" name="page_number" value="">
			<div class="col-md-4">
					<div class="form-group">
						<label for="name" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<input type="text" name="name" class="form-control">
						</div>
					</div>
			</div>
			<div class="col-md-4">
					<div class="form-group">
						<label for="date_from" class="col-sm-3 control-label">From</label>
						<div class="col-sm-9">
							<input type="text" name="date_from" class="form-control date">
						</div>
					</div>
			</div>
			<div class="col-md-4">
					<div class="form-group">
						<label for="date_to" class="col-sm-3 control-label date_label">Date</label>
						<div class="col-sm-9">
							<input type="text" name="date_to" class="form-control date date_input">
						</div>
					</div>
				</form>
			</div>
		</div><!-- end of row -->
		<div class="row">
			<div class="col-md-12" id="users_table">
				
			</div>
		</div>
	</div><!-- end of container -->
</body>
</html>