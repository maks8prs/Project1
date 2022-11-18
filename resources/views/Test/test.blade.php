<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> Первая переменная: {{ $var1 }} Вторая переменная: {{ $var2 }} 
	<ul>
@foreach ($arr as $elem)
	<li>{{ $elem }}</li>
@endforeach
  </ul>
@foreach ($arr as $key => $elem)
	{{ $key+1 }} {{ $elem }}
@endforeach
<ul>
@foreach ($add as $key1 => $elem1)
	<li>{{ $key1+1 }} {{ $elem1 }}</li>
@endforeach
</ul>


@foreach ($arr1 as $elem2)
     @if($elem2%2==0)
	<p>{{ $elem2 }}</p>
	@endif
@endforeach

@if (is_array($data))
	<ul>
		@foreach ($data as $elem)
			<li>{{ $elem }}</li>
		@endforeach
	</ul>
@endif

@if ($data)
	
		@foreach ($data as $elem)
			<p>{{ $elem }}</p>
		@endforeach
	
@endif

<table>
	@foreach ($fsd as $subFsd)
		<tr>
			@foreach ($subFsd as $elem)
				<td>{{ $elem }}</td>
			@endforeach
		</tr>
	@endforeach
</table>

<ul>
	@foreach ($emp as $em)
		<li>{{ $em['name'] }} {{ $em['surname'] }} {{ $em['salary'] }}</li>
	@endforeach
</ul>
<table>
@foreach ($emp as $em)
		<tr>{{ $em['name'] }} {{ $em['surname'] }} {{ $em['salary'] }}</tr>
	@endforeach
</table>
</body> 
</html>
