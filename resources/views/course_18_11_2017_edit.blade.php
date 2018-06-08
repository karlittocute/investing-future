@extends ('layoutsection')

@section('content')

<h4>Курс 18 и 25 ноября</h4>
<h4>Размер платежа: 2 500 рублей</h4>				
<form id="course_18_11_2017" name="course_18_11_2017" method="POST" action="/course_18_11_2017/{{$course->id}}">
	{{ csrf_field()}}
	{{ method_field('PUT') }}
	<button type="submit" id="submitcourse_18_11_2017" name="submitcourse_18_11_2017" type="button" class="btn btn-lg btn-block">Оплатить</button>
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