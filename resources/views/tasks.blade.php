<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
<div class="espace">.</div>

<section class="section-inscription">
		<div class="container">
			<div class="card">
				<div class="card-header">
                <h2 class="text-center ">Tous les tâches
			</h2>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>Titre</th>
							<th>Sujet</th>
							<th>Description</th>
							<th>Statut</th>
							<th>Responsable</th>
						</tr>
						@foreach($tasks as $task)
							<tr>
								<td>{{$task->title }}</td>
								<td>{{$task->subject}}</td>
								<td>{{$task->description}}</td>
								<td>
                                     @if ($task->status == 'encours') 
										En Cours
									@elseif ($task->status == 'terminee' )
										Terminé
									 @else 
										en attente
									@endif
								</td>
								<td>
                                    @if($task->firstname)
                                {{$task->firstname}} {{$task->lastname}}
                                @endif
								</td>
								
							</tr>
						 @endforeach
					</table>
				</div>
			</div>
		</div>
	</div>

</body>

</html>