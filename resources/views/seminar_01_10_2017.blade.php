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
<h6 style="font-size: 15pt;">1 Октября с 18:00 до 20:00</h6>
<h6 style="font-size: 15pt;">Стоимость 500 рублей</h6>
<h6 style="font-size: 11pt;">Стоимость в день семинара 1 000 рублей</h6>

<h5><u><a style="color:rgba(0,0,0,0.7)" href="{{ URL::asset('/place') }}">Место проведения: Переулок Газетный д.27</a></u></h5>
<div class="row text-center">
	@if (Auth::check())
		@if (!Auth::user()->seminar_01_10_2017)
			<h6>Вы не записаны на семинар</h6>
			<form id="seminar_01_10_2017" name="seminar_01_10_2017" method="POST" action="/seminar_01_10_2017">
			{{ csrf_field()}}
			<button type="submit" id="submitseminar_01_10_2017" name="submitseminar_01_10_2017" type="button" class="btn btn-default">Записаться</button>
			</form>
		@elseif (Auth::user()->seminar_01_10_2017->status==1)
			<h6>Вы записаны на семинар</h6>
			<h6>Статус оплаты: Оплачено</h6>
		@elseif (Auth::user()->seminar_01_10_2017->status==0)
			<h6>Вы записаны на семинар</h6>
			<h6>Статус оплаты: Не оплачено  </h6>
			<form action="/seminar_01_10_2017/{{auth()->user()->seminar_01_10_2017->id}}/edit">
			<button type="submit"  type="button" class="btn btn-default">Оплатить</button>
			</form>
		@elseif (Auth::user()->seminar_01_10_2017->status==2)
			<h6>Вы записаны на семинар</h6>
			<h6>Статус оплаты: Обработка платежа</h6>
			@endif
	@else 
		<form action="{{ URL::asset('user/create') }}">
		<button type="submit"  type="button" class="btn btn-default">Регистрация</button>
		</form>
	@endif
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