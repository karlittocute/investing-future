@extends ('layoutsection')

@section('content')

 <h3>Проверьте пожалуйста данные для оплаты</h3>
	<h4>Курс 16.27.2017</h4>
	<h4>Размер платежа: 2 500 руб</h4>
    <form action="https://money.yandex.ru/eshop.xml" method="post">
    <input required name="shopId" value="149024" type="hidden"/>
    <input required name="scid" value="150355" type="hidden"/>
    <input required name="sum" value="2500"  type="hidden" type="number" min="1" readonly >

     Номер телефона (<font color="red">*</font>):<br>
     <input required name="customerNumber" value="{{$course->user->phone }}" size="64" class="form-control"/><br>

     Имя покупателя:<br>	
     <input name="custName" value="{{ $course->user->surname}} {{ $course->user->name }} " size="64" class="form-control"/><br>

     <input name="custAddr" value="course_09_10_2017  {{$course->id }}" size="64" class="form-control" readonly type="hidden"/>

     Email покупателя:<br>	
     <input name="custEmail" value="{{$course->user->email }}" size="64" class="form-control"/><br>
	
	<input type="submit" class="btn btn-lg btn-block" value="Оплатить">	
     </form>
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