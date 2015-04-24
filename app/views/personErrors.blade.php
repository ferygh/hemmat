@if($errors->has())
<div class="alert alert-warning" role="alert">
	Warning:
<ul>
{{$errors->first('name','<li>:message</li>')}}
{{$errors->first('report_id','<li>:message</li>')}}
{{$errors->first('person_code','<li>:message</li>')}}
{{$errors->first('address','<li>:message</li>')}}
{{$errors->first('date','<li>:message</li>')}}
{{$errors->first('document','<li>:message</li>')}}
</ul>
</div>
@endif