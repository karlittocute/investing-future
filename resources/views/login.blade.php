@extends ('layoutsection')

@section('content')

<form id="user" name="user" method="POST" action="/login">
	{{ csrf_field()}} <!-- Для того что бы значть, что POST запрос идет с этого же сайта -->
	<div class="form-group">
		<label for="email">Электронная почта<sup><i class="fa fa-asterisk" style="color: #c0392b;"></i></sup></label>
		<input id="email" name="email" type="email" class="form-control" placeholder="ivan@ivanovich.ru" required>
	</div>
	<div class="form-group">
		<label for="password">Пароль<sup><i class="fa fa-asterisk" style="color: #c0392b;"></i></sup></label>
		<input id="password" name="password" type="password" class="form-control" required>
	</div>
	@include('errors')
	<button type="submit" id="submitResume" name="submitResume" type="button" class="btn btn-lg btn-block">Войти</button>
	  
	  </br>
</form>
				


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(function() {
      console.log('Jquery is ok');
      $('#scheduletext').prop('disabled', true);


      $('#submitResume').on('click', function(){
        console.clear();
        console.log('Hello!');
        let visa = $('#visa').val();
        if (visa === "") 
          console.log('visa= ' + visa);


        $('#resume').submit();

      });

      $('#schedulespecial').change(function() {
        if ($(this).is(":checked")) {
          $('#scheduletext').prop('disabled', false);          
        }
        else {
          $('#scheduletext').prop('disabled', true);           
        }



      })


    }); // The end of jquery code.


    </script>
@endsection