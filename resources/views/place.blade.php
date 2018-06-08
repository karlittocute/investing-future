@extends ('layoutwidesection')

@section('content')

<div class="text-center">

	<h3>Место проведения:</br>  г. Ростов-на-Дону, ул. Города Волос 135 / пр. Журавлева 136</h3>
	
	<div class="hidden-xs  ">
		<button class="shine" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="{{ URL::asset('images/place_normal2.jpg') }}"></button>
	
	</div>
	<div class="hidden-md hidden-lg hidden-sm">
		<button class="shine" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="{{ URL::asset('images/place_min2.jpg') }}"></button>
	</div>
	</br></br>
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <img src="{{ URL::asset('images/place2.jpg') }}" width="900" height="560">
		</div>
	  </div>
	</div>
	

	
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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