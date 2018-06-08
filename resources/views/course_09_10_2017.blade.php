@extends ('layoutwidesection')

@section('content')

<h3>Полноценный курс</h3>
<h6 style="font-size: 15pt;">
Что такое облигации и как их выбрать</br>
Как инвестировать в акции
 <ul>
  <li>Фундаментальный анализ</li>
  <li>Технический анализ</li>
   </ul>
Какого брокера лучше выбрать</br>
Как накапливать на покупку недвижимости либо автомобиля</br>
Действительно ли покупка акций так рискованна?</br>
Как зарабатываются большие деньги в кризис.</br>
Что такое спекуляции и чем они отличаются от инвестирования</br>
Зачем нужны паевые инвестиционные фонды (ПИФы)</br>
Как защититься от инфляции</br>
Как защититься от девальвации</br>
С чего начать?</br>

</h6>
<h6 style="font-size: 15pt;">с 16 по 27 Октября по Понедельникам средам и пятницам с 20:00 до 21:00</h6>
<h6 style="font-size: 15pt;">Стоимость 2 500 рублей</h6>
<h6 style="font-size: 11pt;">Стоимость в первый день обучения 5 000 рублей</h6>
<h5><u><a style="color:rgba(0,0,0,0.7)" href="{{ URL::asset('/place') }}">Место проведения: Переулок Газетный д.27</a></u></h5>
<div class="row text-center">
	@if (Auth::check())
		@if (!Auth::user()->course_09_10_2017)
			<h6>Вы не записаны на курс</h6>
			<form id="course_09_10_2017" name="course_09_10_2017" method="POST" action="/course_09_10_2017">
			{{ csrf_field()}}
			<button type="submit" id="course_09_10_2017" name="submitcourse_09_10_2017" type="button" class="btn btn-default">Записаться</button>
			</form>
		@elseif (Auth::user()->course_09_10_2017->status==1)
			<h6>Вы записаны на курс</h6>
			<h6>Статус оплаты: Оплачено</h6>
		@elseif (Auth::user()->course_09_10_2017->status==0)
			<h6>Вы записаны на курс</h6>
			<h6>Статус оплаты: Не оплачено  </h6>
			<form action="/course_09_10_2017/{{auth()->user()->course_09_10_2017->id}}/edit">
			<button type="submit"  type="button" class="btn btn-default">Оплатить</button>
			</form>
		@elseif (Auth::user()->course_09_10_2017->status==2)
			<h6>Вы записаны на курс</h6>
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