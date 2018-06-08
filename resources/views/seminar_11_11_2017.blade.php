@extends ('layoutwidesection')

@section('content')

<h3>Ознакомительный</h3>
<h6  style="font-size: 15pt;">
	Как устроен финансовый мир вокруг нас</br>
	Как создается капитал с нуля</br>
	Психология трат </br>
	Психология накопления</br>
	Как общество манипулирует нашим сознанием и кошельком</br>
	С какой скоростью прирастают деньги</br>
	Что такое деньги и почему не рекомендуется накапливать именно деньги</br>
	Что такое бюджет и как его вести</br>
	О инфляции</br>
	Какие же у обычного человека есть способы вложения денег</br>
	Что такое акции и облигации и зачем их покупать?</br>
</h6>


<div class="row text-center">
	<h6 style="font-size: 15pt;">11 Ноября с 14:00-16:00</h6>
	<h6 style="font-size: 15pt;">Стоимость:Бесплатно</h6>
	<h6><u><a style="color:rgba(0,0,0,0.7)" href="{{ URL::asset('/place') }}">Место проведения: г. Ростов-на-Дону, ул. Города Волос 135 / пр. Журавлева 136</a></u></h6>

	<h5 style="font-size: 15pt;">Регистрация будет открыта 9 ноября</h5>
	</br>

</div>
				


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