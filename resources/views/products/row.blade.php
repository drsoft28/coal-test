<tr id="item-{{$item->id}}">
<th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->qty}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->price * $item->qty}}</td>
</tr>