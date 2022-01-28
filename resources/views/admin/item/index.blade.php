<h2>商品一覧</h2>
<a href="{{route('admin.item.create')}}">商品追加</a>

<table>
    <tr>
        <th></th>
        <th>{{__('Item Name')}}</th>
        <th>{{__('Item Code')}}</th>
        <th>{{__('Price')}}</th>
    </tr>
    @if($items)
    @foreach($items as $item)
    <tr>
        <th><a href="{route('admin.item.edit',$item">{{__('Edit')}}</a></th>
        <th>{{$item->name}}</th>
        <th>{{$item->code}}</th>
        <th>{{$item->price}}</th>
    </tr>
    @endforeach
    @endif
</table>






