@extends ('layoutsection')

@section('content')

<h4>Семинар 01.10.2017</h4>
<h4>Размер платежа: 500 рублей</h4>				
<form id="seminar_01_10_2017" name="seminar_01_10_2017" method="POST" action="/seminar_01_10_2017/{{$seminar->id}}">
	{{ csrf_field()}}
	{{ method_field('PUT') }}
	<button type="submit" id="submitseminar_01_10_2017" name="submitseminar_01_10_2017" type="button" class="btn btn-lg btn-block">Оплатить</button>
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