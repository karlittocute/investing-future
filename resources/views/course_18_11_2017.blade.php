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
<h6 style="font-size: 15pt;">18 ноября и 25 ноября с 14:00-17:00</h6>
<h6 style="font-size: 15pt;">Стоимость 2 500 рублей</h6>
<div class="row text-center">
	<h6><u><a style="color:rgba(0,0,0,0.7)" href="{{ URL::asset('/place') }}">Место проведения: г. Ростов-на-Дону, ул. Города Волос 135 / пр. Журавлева 136</a></u></h6>

	@if (Auth::check())
		@if (!Auth::user()->course_18_11_2017)
			<h6>Вы не записаны на курс</h6>
			<form id="course_18_11_2017" name="course_18_11_2017" method="POST" action="/course_18_11_2017">
			{{ csrf_field()}}
			<button type="submit" id="course_18_11_2017" name="submitcourse_18_11_2017" type="button" class="btn btn-default">Записаться</button>
			</form>
		@elseif (Auth::user()->course_18_11_2017->status==1)
			<h6>Вы записаны на курс</h6>
			<h6>Статус оплаты: Оплачено</h6>
		@elseif (Auth::user()->course_18_11_2017->status==0)
			<h6>Вы записаны на курс</h6>
			<h6>Статус оплаты: Не оплачено  </h6>
			<form action="/course_18_11_2017/{{auth()->user()->course_18_11_2017->id}}/edit">
			<button type="submit"  type="button" class="btn btn-default">Оплатить</button>
			</form>
		@elseif (Auth::user()->course_18_11_2017->status==2)
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