@extends('layouts.home')
@section('content')

	
				


<div class="breadcrumbs-v3 img-v1">
			<div class="container text-center">
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v3 ===-->
		

<!--=== Service Blocks ===-->
<div class="container content-sm">
	<div class="text-center margin-bottom-50">
		<h1 class="title-v2 title-center">AVIZ</h1>
		<p class="space-lg-hor"></p>
		<h2>ÎN ATENȚIA ABSOLVENȚILOR DE GIMNAZII</h2>

<h4>Administrația Colegiului ”Iulia Hasdeu” din Cahul anunță prelungirea perioadei de depunere a dosarelor pentru locurile neacoperite la studii prin contract cu achitarea taxei la următoarele specialitati:</h4>

<h3>	
Contabilitate,</br>
Asistență Socială,</br>
Ecologie și protecția mediului,</br>
Interpretare instrumentală,</br>
Pictură.</br>
</H3>
<h2>PROGRAM: luni - sîmbăta; de la ora 8 - 16, tel. 029941452: 029941530: 029941491.  </h2>
		</div>
	<hr>
	
	<div class="text-center margin-bottom-50">
		<h1 class="title-v2 title-center">Rezultatele concursului de admitere pentru anul 2017</h1>
		<p class="space-lg-hor"></p>
		<h4 class="space-lg-hor">Administrația instituției vă aduce la cunoștință că rezultatele concursului de admitere vor fi afișate pe data de 8 august 2017 , ora 12.00.</h4>
		
		</div>
	<hr>
	
	<div class="text-center margin-bottom-50">
		<h1 class="title-v2 title-center">Ordine cu privire la depunerea dosarelor pentru concursul de admitere 2017</h1>
		<p class="space-lg-hor"></p>
		<p class="space-lg-hor"><a href="{{URL::asset('assets/fisiere/termendepuneredosare.JPG')}}">Ordinul nr. 590 din 30 iunie 2017</a></p>
		<p class="space-lg-hor"><a href="{{URL::asset('assets/fisiere/specialitatea PEDAGOGIE.JPG')}}">Ordinul nr. 666 din 31 iulie 2017</a></p>
		</div>
	<hr>
	
	<div class="text-center margin-bottom-50">
		<h1 class="title-v2 title-center">AVIZ</h1>
		<p class="space-lg-hor"></p>
		<h3>Stimați părinți și abiturienți, candidații înscriși la studii atît cei de la buget cît și cei înscriși la studii cu achitarea taxei, prin contract vă rugam să vă prezentați pe data de 08.08.2017, pentru a încheia contract de studii cu instituția. Pentru cei admiși la studii cu achitarea taxei Vă rugăm să aveți cu Dumneavoastră suma de 2850 lei pentru achitarea taxei de studii, și 840 lei pentru taxa de cazare în căminul studențesc.</h3>

<p>Multumim frumos pentru colaborare.</p>

<p>Administratia colegiului.  </p>
		</div>
	<hr>
	<div class="text-center margin-bottom-50">
				<h1 class="title-v2 title-center"><a href="{{URL::asset('assets/fisiere/CereriAdmitere2017.pdf')}}">Informaţie privind depunerea dosarelor la concursul de admitere - 2017</a></h1>
  <h2>Colegiul ”Iulia Hasdeu” din Cahul															</h2>
				<p class="space-lg-hor"></p>
		
		</div>
	<hr>
			<div class="text-center margin-bottom-50">
				<h1 class="title-v2 title-center">Specialitățile din planul de admitere pentru anul de învăţămînt 2017-2018:</h1>
				<p class="space-lg-hor"></p>
				
				<table class="table table-bordered">
					<thead  >
					<tr class="info" align="center">
						<th> Specialitatea</th>
						<th> Profilul</th>
						<th > Durata studiilor</th>
					</tr>
					</thead>
					<tbody>
						<tr >
							<th class="table-col-desc"> Contabilitate</th>
							<td> Real</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Administrarea aplicațiilor WEB</th>
							<td> Real</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Programare și analiza produselor program</th>
							<td> Real</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Ecologie</th>
							<td> Real</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Asistență Socială </th>
							<td> Umanist</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Pedagogie Preșcolară </th>
							<td> Umanist</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Interpretare Instrumentală </th>
							<td> Arte</td>
							<td> 4 ani</td>
						</tr>
						<tr >
							<th class="table-col-desc"> Pictură </th>
							<td> Arte</td>
							<td> 4 ani</td>
						</tr>
					</tbody></table>
				
			</div>
	<hr>
<div class="container content-sm">
			<div class="text-center margin-bottom-50">
				<h2 class="title-v2 title-center">Planul de admitere 2017</h2>
				<p class="space-lg-hor"><a href="{{URL::asset('assets/fisiere/cihcahul_planadmitere2017.jpg')}}">Planul de înmatriculare la programe de formare profesională tehnică postsecundară.</a></p>
			</div>
	</div>
	
		<div class="container content-sm">
			<div class="text-center margin-bottom-50">
				<h2 class="title-v2 title-center">Actele necesare</h2>
				<p class="space-lg-hor">Candidaţii trebuie să dispună de buletinul de identitate indiferent de vîrstă şi să-l prezinte personal!</p>
			</div>

			<div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
						@if(count($acte)>0)
						@foreach($acte as $i)
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-directions"></i>
					<div class="content-boxes-in-v4">
						<h2>{{$i->titlu}}</h2>
						<p>{{$i->descriere}}</p>
					</div>
				</div>
						@endforeach
						@endif
				</div>
			
			</div>

		
				<br>
				<h2 class="title-v1 text-center">Calcularea mediei de concurs</h2>
				<form class="col-lg-12" style='color:black;' id='formMedia'>
						<div class="form-group col-md-6">
							<label>LIMBA DE INSTRUIRE</label>
							<input type="number" class="form-control" id="nota1" min="1" max='10'>
						 </div>
						<div class="form-group col-md-6">
							<label>LIMBA STRĂINĂ (en/fr)</label>
							<input type="number" class="form-control" id="nota2" min="1" max='10'>
						 </div>
						<div class="form-group col-md-6">
							<label>MATEMATICA</label>
							<input type="number" class="form-control" id="nota3" min="1" max='10'>
						 </div>
						<div class="form-group col-md-6">
							<label>INFORMATICA / ISTORIA</label>
							<input type="number" class="form-control" id="nota4" min="1" max='10'>
						 </div>
						<div class='form-group col-md-12'>
							<button type="submit" class="btn btn-primary">Calculeaza</button>
						</div>
						<div class="form-group col-md-12">
							<label>NOTA FINALA</label>
							<input type="text" class="form-control" id="final" readonly>
						 </div>
					</form>
					<script>
						$('#formMedia').on('submit',function(e){
							e.preventDefault();
							var nota1=$('#nota1').val();
							var nota2=$('#nota2').val();
							var nota3=$('#nota3').val();
							var nota4=$('#nota4').val();
							if(nota1.length===0 || nota2.length===0 || nota3.length===0 || nota4.length===0){
								$('#final').val('Asigurate ca ai introdus toate notele');
							}else{
								var notafinala=(parseInt(nota1)+parseInt(nota2)+parseInt(nota3)+parseInt(nota4))/4;
								$('#final').val(notafinala.toFixed(2));
							}
					
						});
					</script>
				
						<div class="container content">
			<div class="row">
				<div class="col-md-12">
					<!-- General Questions -->
					@if(count($intrebari)>0)
					<div class="headline"><h2>Întrebări frecvente</h2></div>
					<div class="panel-group acc-v1 margin-bottom-40" id="accordion" style="color:gray">
						@foreach($intrebari as $i)
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$i->id}}">
										{{$i->intrebare}}
									</a>
								</h4>
							</div>
							<div id="collapseOne{{$i->id}}" class="panel-collapse collapse">
								<div class="panel-body" >
									{{$i->raspuns}}
								</div>
							</div>
						</div>
						@endforeach
					</div><!--/acc-v1-->
					@endif
					<!-- End General Questions -->
					</div></div></div>
				
				</div>
			</div>
			<!--=== End Service Block ===-->
@endsection