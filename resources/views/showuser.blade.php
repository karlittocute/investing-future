@extends ('layoutsection')

@section('content')

<h3>Имя: {{ $user->surname }} {{ $user->name }}</h3>
<h4>Email: {{ $user->email }}</h4>
<h4>Телефон: {{ $user->phone }}</h4>
<div class="text-center">
	--------
</div>

<div class="text-center">
	<h5>К сожалению, семинары и курсы пока не проводятся.</br>
	Мы направили наши силы на написание нашей книги,
	которая ориентировочно будет закончена в декабре. Затем когда она будет написана, 
	мы начнем новую компанию по привлечению людей заинтересованных в нашей тематике.
	Когда закончим, будем уже проводить ознакомительные семинары и полноценные курсы.</br></br>

	Наша деятельность не прекращается, а всего лишь приостанавливается для более рационального использования времени и средств.</br></br>


	Оставайтесь с нами. Мы продолжаем работать, наш труд, временно скрыт от чужих глаз. </br></br>
	Вы можете подписаться на нашу <a href="https://vk.com/investing_future" >группу</a>, чтобы следить за новостями.</br>
	</h5> 
</div>
</br>		

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