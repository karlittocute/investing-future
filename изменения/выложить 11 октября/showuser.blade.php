@extends ('layoutsection')

@section('content')

<h3>Имя: {{ $user->surname }} {{ $user->name }}</h3>
<h4>Email: {{ $user->email }}</h4>
<h4>Телефон: {{ $user->phone }}</h4>
<div class="text-center">
	--------
</div>

<div>
	<h4><a href="{{ URL::asset('/seminar_14_10_2017') }}">Семинар 25.10.2017</a></h4>
	@if (!Auth::user()->seminar_25_10_2017)
		<h6>Вы не записаны на семинар</h6>
		<form id="seminar_25_10_2017" name="seminar_25_10_2017" method="POST" action="/seminar_25_10_2017">
		{{ csrf_field()}}
		<button type="submit" id="submitseminar_25_10_2017" name="submitseminar_25_10_2017" type="button" class="btn btn-default">Записаться</button>
		</form>
	@elseif (Auth::user()->seminar_25_10_2017->status==0)
		<h6>Вы записаны на семинар</h6>
	@endif
</div>
<div>
	<h4><a href="{{ URL::asset('/course_04_11_2017') }}"> Курс 4 и 11 ноября</a></h4>
	@if (!Auth::user()->course_04_11_2017)
		<h6>Вы не записаны на курс</h6>
		<form id="course_04_11_2017" name="course_04_11_2017" method="POST" action="/course_04_11_2017">
		{{ csrf_field()}}
		<button type="submit" id="course_04_11_2017" name="submitcourse_04_11_2017" type="button" class="btn btn-default">Записаться</button>
		</form>
	@elseif (Auth::user()->course_04_11_2017->status==1)
		<h6>Вы записаны на курс</h6>
		<h6>Статус оплаты: Оплачено</h6>
	@elseif (Auth::user()->course_04_11_2017->status==0)
		<h6>Вы записаны на курс</h6>
		<h6>Статус оплаты: Не оплачено  </h6>
		<form action="/course_04_11_2017/{{auth()->user()->course_04_11_2017->id}}/edit">
		<button type="submit"  type="button" class="btn btn-default">Оплатить</button>
		</form>
	@elseif (Auth::user()->course_04_11_2017->status==2)
		<h6>Вы записаны на курс</h6>
		<h6>Статус оплаты: Обработка платежа</h6>
		@endif
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