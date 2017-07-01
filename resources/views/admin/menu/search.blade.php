<div class="row margin-bottom">
	<div class="col-xs-12">
		<form action="{{ route('admin.menu.index') }}" method="GET">
			{!! csrf_field() !!}
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Tiêu đề</label>
				<input name="name" type="text" value="{{ $request->name }}" class="form-control" placeholder="Name">
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>URL</label>
				<input name="url" type="text" value="{{ $request->url }}" class="form-control" placeholder="URL">
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label for="type">Loại menu</label>
				{!! Form::select('type', array_add($optionMenuType, '', '-- chọn'), $request->type, array('class' =>'form-control')) !!}
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Trạng thái</label>
			  	{{ Form::select('status', array_add(CommonOption::statusArray(), '', '-- chọn'), $request->status, array('class' =>'form-control')) }}
			</div>
			<div class="input-group" style="display: inline-block; vertical-align: bottom; margin-top: 15px;">
				<input type="submit" class="btn btn-primary" value="Search" />
			</div>
		</form>
	</div>
</div>