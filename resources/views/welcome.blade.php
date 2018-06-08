@extends ('layout')

@section('content')
<nav class="pushy pushy-left">
	<ul class="list-unstyled">
		<li><a href="#home">Главная</a></li>
		<li><a href="#about">Вложения</a></li>
		<li><a href="#iis">Что такое ИИС</a></li>
		<li><a href="#brokers">Брокеры</a></li>
		<li><a href="#registration">Регистрация</a></li>
	</ul>
</nav>
<div class="wrapper">
<div class="main">
	
	<section>
		<header id="home">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-10">
							<a href="#" class="thumbnail logo">
								<img src="images/your_logo.png" alt="" class="img-responsive">
							</a>
						</div>
						<div class="col-md-2 col-md-offset-7 col-xs-offset-2 col-xs-8">
						<div class="menu-btn" style='position:fixed; top:20px; left:95%;'><span class="hamburger">&#9776;</span></div>
						<div style='position:fixed; top:89%; left:95%;' class="text-center">
							<a href="https://vk.com/investing_future">
								<img width="50" height="50" src="images/logo/vk.png"   alt="" >
							</a>
						</div>
							@if (Auth::check())
								<a style="color:white" href="/user/{{Auth::user()->id}}">{{Auth::user()->email}}</a></br>
								<a style="color:white" href="{{ URL::asset('/logout') }}">Выход</a>
							@else 
								<a style="color:white" href="{{ URL::asset('user/create') }}">Регистрация</a></br>
								<a style="color:white" href="{{ URL::asset('/login') }}">Вход</a>
							@endif
						</div>
					</div>
					<div class="jumbotron">
						<h1><small>Я ВИЖУ СВОЕ</small></br>
						<strong>ФИНАНСОВОЕ БУДУЩЕЕ</strong></h1>
					</div>
				</div>
			</div>
		</header>
	</section>
	
	<section>
		<div class="container">
			<div class="row features">
				 <div class="text-center">
					
					@if (date("G")+3>=5 and date("G")+3<10) 
						<h3>Доброе утро! </h3>
					@elseif (date("G")+3>=10 and date("G")+3<17) 
						<h3>Добрый день! </h3>
					@elseif (date("G")+3>=17 and date("G")+3<22) 
						<h3>Добрый вечер! </h3>
					@elseif (date("G")+3>=22 and date("G")+3<=24 or date("G")+3>5 ) 
						<h3>Доброй ночи! </h3>
					@else
						<h3>Добрый день! </h3>
					@endif
					<h4>После окончания просмотра, у Вас будет понимание того, как обычно 
					люди теряют свои деньги и при помощи каких инструментов их приумножают.</h4>
					</br>
					<h5>Капитал всегда создается из ничего: его создает либо кто-то до тебя, 
					либо ты, по-другому никак. Если денег нет сегодня, и этим не заниматься, 
					то их не будет никогда. Поначалу кажется, подобное невозможно, однако это 
					обычная задача для каждого.</h5>
					</br>
					<h5>Небольшая инфографика о том, сколько население может прожить, не имея работы.</h5>
					<button class="shine" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="images/chart_min.png"></button>

					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						  <img src="images/chart.png" width="900" height="560">
						</div>
					  </div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>

	<section class="darksection">
		<div class="container">
			<div class="row features">
					<h5>Именно поэтому люди так боятся потерять работу. Денег у людей нет, а наемный труд зачастую 
					является единственным источником дохода. Сбережения отсутствуют, так как нет понимания, что же 
					такое деньги —советское прошлое прочно оставило след в сознании людей, они сразу стараются либо
					избавиться от денег и тратят все без остатка, либо пытаются «сыграть» и в миг озолотиться. </h5>
					<h5>Отсюда и идет процветание индустрии форекса, финансовых пирамид и бинарных опционов. На всем
					этом люди теряют свои деньги. Именно от этой категории людей можно услышать "Лучше от всего этого
					держаться подальше", они так и не дошли до реального сектора.</h5>
			</div>
		</div>
		
	</section>
	
	<section id="about">
		<div class="container">
			<div class="row features">
				<h5>
				<strong>Купить квартиру или автомобиль.</strong> В большинстве своем людям никто не рассказал о том, что купить квартиру,
				автомобиль можно путем инвестирования, вложения своих денег, но зато все подряд рассказывают
				о том, что можно взять все это в кредит и оно понятно, ведь банки не плохо на этом зарабатывают,
				в то время как от инвестирующего клиента брокер получает лишь маленький процент комиссионных,
				в большинстве своем это менее 0,1%.
				</br></h5>
				<h5>
				<strong>Капитал при котором не обязательно работать.</strong> Самое приятно от того, что ты имеешь деньги – 
				это независимость от наемного труда, либо другого вида занятости. Ты получаешь деньги которые
				создают твои деньги, а те деньги создают другие деньги.
				</br></h5>
				<h5>
				<strong>Пенсия. </strong>
				Все рано или поздно придут к этому. Инвестируя, 
				ты можешь уже не так сильно беспокоиться о том, как жить на пенсии.
				Помимо государства тебе доход приносит еще и купленное ранее имущество.
				Ты всегда контролируешь свои деньги и волен распорядиться ими как хочешь,
				в отличии от страховой части пенсии.
				</h5>
			</div>
		</div>
	</section>
	
	<section class="bluesection">
		<div class="container">
			<div class="row features">
				<h5><strong>Облигация </strong>
				- это самый обычный заем без участия банка. Когда вы кладете деньги на депозит, банк ссужает эти деньги
				другим людям и компаниям, а та процентная разница которая возникает от полученного депозита и выданного
				кредита банк забирает себе, бывает они берут у клиента под 5% и размещают в ЦБ до 8,25%, обычному человек 
				можно проделывать ту же операцию и покупать ОФЗ вместо вклада в банк с эффективной доходностью до 9%,
				а доходность облигаций банков выше на 50-75% в отличие от депозитов в этих же банках.
				</h5>
				<h5>
				<strong>Быть акционером - это нормально.</strong>  Акции не такое уж странное и необычное слово,
				быть акционером это нормально, 80% людей живущих в США и 60% людей живущих в европе являются 
				акционерами и наоборот, довольно странно не владеть ценными бумагами, ведь тогда, денег у тебя нет, и вряд ли будут.
				</h5>
				<h5><strong>Акция</strong>
				- это доля в работающем бизнесе. Не каждый может открыть бизнес, 
				а если и открывает, то по статистике после первого года работы, продолжает работать
				лишь 50% от начавших работать бизнесменов, спустя еще год, остается 8%, а по итогам 3 лет 
				остается только 3% из 100% и таков уж мир бизнеса согласно статистике. Так много людей хотят
				начать бизнес, так вот же! Можно приобрести уже победителя, прошедшего отбор и работающего уже 
				много лет и исправно платящего часть от прибыли своим владельцам. С 2015 года, наше государство 
				еще и помогает начинающим инвесторам.
				</h5>
			</div>
		</div>
	</section>
	

	
	<section id="iis">
		<div class="container">
			<div class="row">
				
				<h2>Что такое ИИС? </h2>
				<h5>С 2015 года государство субсидирует частных инвесторов введением индивидуального инвестиционного 
				счета (далее ИИС), его может открыть каждый. Важное отличие ИИС от обычных 
				счетов – это наличие льготы. </br>
				Начинающий инвестор вправе выбрать льготу: </h5>
				<div class="row features">
					<div class="col-md-6 ">
						<h5>A) На взнос</br>
						Когда идет возврат ранее уплаченного НДФЛ (с официальной зарплаты) в размере 13% от внесенной суммы.
						Т.е. изначально просто открыв ИИС уже можно получить 13% доходность в отличие от депозита в сбербанке в размере 5%.
						</h5>
					</div>
					<div class="col-md-6 ">
						<h5>Б) Без уплаты налога на прибыль</br>
						Весь доход получаемый путем инвестиционной деятельности не облагается налогом.
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="brokers" class="darksection">
		<div class="container">
			<div class="row features">
				<h3>Кто такие брокеры </h3>
				<h5 class="underlinetext" id="show" style="cursor:hand;cursor:pointer;" onclick="document.getElementById('broker').style.display='';document.getElementById('hide').style.display='';document.getElementById('show').style.display='none'">Подробнее...</h5>
				<h5 class="underlinetext" id="hide" style="display:none" style="cursor:hand;cursor:pointer;" onclick="document.getElementById('broker').style.display='none';document.getElementById('hide').style.display='none';document.getElementById('show').style.display=''">Скрыть</h5>						 
				<div id="broker" style="display:none">
					<h5>Брокер - это торговый представитель клиента имеющий право совершать операции с ценными бумагами по поручению клиента.
					Наиболее известные это – Сбербанк, Финам, Промсвязьбанк, Тинькофф банк и многие другие.</h5>
					
					<div class="text-center">
						<img src="images/logo/sberbank.png" width="250" height="130" hspace="40px">
						<img src="images/logo/psb.png"  width="250" height="130">
						<img src="images/logo/finam.png"  width="250" height="130">
						<img src="images/logo/tinkoff.png"  width="250" height="130">
					</div>
				</div>
			</div>		
		</div>
	</section>
	<section class="bluesection">
		<div class="container">
			<div class="row">
				<h3 align="center">Для этого не нужны большие деньги, все начинается с малого</h3> 
				<div class=" col-md-offset-3 col-md-6">
					<table style="font-size: 17pt;" class="table table-condensed">
					  <tr>
						<th>Компания</th><th>Стоимость акции</th>
					  </tr>
					  <tr>
						<td><img src="images/logo/sberbank.png"  width="166" height="86"></td>
						<td>1 875</td>
					  </tr>
					  <tr>
						<td><img src="images/logo/gazprom.png" width="166" height="66"></td>
						<td>1 215</td>
					  </tr>
					  <tr>
						<td><img src="images/logo/megafon.png" width="166" height="66"></td>
						<td>5 920</td>
					  </tr>
					  <tr>
						<td><img src="images/logo/mts.png" width="166" height="66"></td>
						<td>2 795</td>
					  </tr>
					  <tr>
						<td><img src="images/logo/mvideo.png" width="166" height="66"></td>
						<td>4 292</td>
					  </tr>
					  <tr>
						<td><img src="images/logo/lenta.png" width="166" height="66"></td>
						<td>361</td>
					  </tr>
					</table>
				</div>
			</div>
			<div class="row text-center">
			<h6>по состоянию на закрытие 24.09.2017*</h6>
			<h4>Все это - работающие бизнесы</h4>
			<h4>А номинал облигаций, всего лишь 1 000 рублей</h4>
			</div>
		</div>
		
	</section>
	
	
	
	<section>
		<div class="container">
			<div class="row features">
				<div class="col-md-10 col-md-offset-1">
					<h5>Мы очень хорошо знаем и понимаем, что большая часть людей очень далека от финансов и
					очень недоверчива относительно любых финансовых инструментов, кроме банковского депозита.</h5> 
					<h5>Но вместе с тем, людей очень интересует тема вложения своих сбережений или же создания капитала.
					Мы за повышение финансовой грамотности населения.</h5>
					<h5>Для разрушения всех мифов и предрассудков относительно финансов мы решили ввести вводный семинар , 
					посетив который станет очевидно, что в современном мире, без понимания работы денег, никуда не деться.</h5>
						
					<h5>28 Октября мы проведем свой второй бесплатный ознакомительный семинар для всех желающих, как создается 
					капитал с нуля, о манипуляциях владельцев бизнеса и какие же у обычного человека есть способы вложения денег.</h5>
				</div>
			</div>
		</div>
	</section>
	
	<section id="registration" class="bluesection">
		<div class="container">
			<div class="row features">
				<div class="col-md-6">
					<h3>Ознакомительный</h3>
					<h6 style="font-size: 15pt;">
					Как устроен финансовый мир вокруг нас.</br>
					Психология трат.</br>
					Психология накопления.</br>
					Что такое бюджет и как его вести.</br>
					Об инфляции и что такое деньги.</br>
					Почему не рекомендуется накапливать именно деньги?</br>
					С какой скоростью прирастает капитал?</br>
					О российском финансовом рынке.</br>
					Инструкция по созданию капитала с нуля.</br>
					Какие же есть способы вложения денег?
					</h6>
				</div>
				<div class="col-md-6">
					<h3>Полноценный курс</h3>
					<h6 style="font-size: 15pt;">
					Как выбрать брокера?</br>
					Что такое облигации и как их выбирать.</br>
					22% с надежностью сбербанка-миф? Реальность!
					Как инвестировать в акции.
					<li> Фундаментальный анализ.</li>
					<li>  Технический анализ.</li>
					Кризис для начинающего инвестора это хорошо!</br>
					Спекуляции VS Инвестиции, о вреде первых.</br>
					Зачем нужны Паевые Инвестиционные Фонды?</br>
					О налогах и возвратах НДФЛ.</br>
					С чего начать?
					
					</h6>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row features">
				<div class="col-md-10 col-md-offset-1">
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
				</div>
			</div>
		</div>
	</section>
	
</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8  col-lg-8 col-sm-4 col-xs-12">
				<div class="col-md-3 col-xs-8" >
					<a href="#" class="thumbnail logo">
						<img src="images/your_logo.png" alt="" class="img-responsive">
					</a>
					<a href="https://vk.com/investing_future" >
						<img   src="images/logo/vk_long.png" alt="" class="img-responsive">
					</a>
					
					
				</div>
			</div>
			<div align="right" class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
				<p style="color:rgba(0,0,0,0.5)">ИП Кицела Глеб Игоревич</br>
				ОГРНИП: 317619600179562</br></p>
				<p>Обратная связь:</br> InvestingFuture.ru@gmail.com</br> 
				© 2017 Investing Future </p>
			</div>
			
		</div>
	</div>
</footer>


@endsection
