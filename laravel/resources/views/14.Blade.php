<ul>
 @foreach ($squares as $square)
 <li>{{$square}}</li>
 @endforeach
</ul>
<ul>
 @foreach ($roots as $root)
 <li>{{$root}}</li>
 @endforeach
</ul>

<ul>
 @foreach ($even as $num)
 <li>{{$num}}</li>
 @endforeach
</ul>

@if (is_array($data))
 <ul>
 @foreach ($data as $item)
 <li>{{$item}}</li>
 @endforeach
 </ul>
@else
 <p>{{$data}}</p>
@endif