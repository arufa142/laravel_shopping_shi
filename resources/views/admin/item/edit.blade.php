<h2>{{ __('Item Input') }}</h2>
<a href="{{route('admin.item.index')}}">{{ __('Back') }}</a>
<form action="{{route('admin.item.update',$item->id)}}"method="post">
@csrf
<div class="form-floating mb-3">
    <label for="">{{ __('label.item_name') }}</label>
    <input type="text" name="name"value="{{$item->name}}">
  </div>
  <div class="form-floating mb-3">
    <label for="">{{ __('label.item_code') }}</label>
    <input type="text" name="code"value="{{$item->code}}">
  </div>
  <div class="form-floating mb-3">
    <label for="">{{ __('label.price') }}</label>
    <input type="number" name="price"value="{{$item->price}}">
  </div>
  <div class="form-floating mb-3">
    <label for="">{{ __('label.stock') }}</label>
    <input type="number" name="stock"value="{{$item->stock}}">
  </div>




<!-- <label for="">商品名</label> -->
<!-- <input type="text"name="name"> -->
<!-- <button>更新</button> -->
<button>{{ __('Update') }}</button>
</form>