

@php $value_price=0; @endphp 
@if($course)
@php $value_price=$course->price; @endphp 
@endif



@if($value=='1')
<input name="price" type="hidden" value="0" />
@endif
 
@if($value=='2')
<div class="form-group">
    <label for="price">هزینه دوره (به ریال)</label>
    <input type="text" class="form-control" id="price" autocomplete="off"
        placeholder=" هزینه دوره  " name="price"  onkeyup="separateNum(this.value,this);" 
        @if($mymodel=='course')  value="{{$value_price}}"    @endif 
        @if($mymodel=='course_request')  value="{{number_format($value_price)}} ریال"  disabled @endif 
        >
</div>
@endif





