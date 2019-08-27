<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">@lang('app.role')</label>
            {!! Form::select('role_id', $roles, $edit ? $user->role->id : '',
                ['class' => 'form-control', 'id' => 'role_id', $profile ? 'disabled' : '']) !!}
        </div>
        <div class="form-group">
            <label for="status">@lang('app.status')</label>
            {!! Form::select('status', $statuses, $edit ? $user->status : '',
                ['class' => 'form-control', 'id' => 'status', $profile ? 'disabled' : '']) !!}
        </div>
        <div class="form-group">
            <label for="first_name">Name And Surname</label>
            <input type="text" class="form-control" id="first_name"
                   name="name_and_surname" placeholder="Name And Surname" value="{{ $edit ? $user->name_and_surname : '' }}">
        </div>
		<div class="form-group">
			<label for="address">Province</label>
			{!! Form::select('province', $provinces, $edit ? $user->province : '', ['class' => 'form-control']) !!}
		</div>
		
		
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="birthday">@lang('app.date_of_birth')</label>
            <div class="form-group">
                <input type="text"
                       name="birthday"
                       id='birthday'
                       value="{{ $edit && $user->birthday ? $user->present()->birthday : '' }}"
                       class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label for="phone">@lang('app.phone')</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="@lang('app.phone')" value="{{ $edit ? $user->phone : '' }}">
        </div>
        <div class="form-group">
            <label for="address">@lang('app.address')</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="@lang('app.address')" value="{{ $edit ? $user->address : '' }}">
        </div>
        <div class="form-group">
			<label for="address">Gender</label><br>
			<input type="radio" name="gender" value="male" <?php echo (isset($edit) && $user->gender == 'male') ? 'checked' : '' ;?>> Male
			<input type="radio" name="gender" value="female" <?php echo (isset($edit) && $user->gender == 'female') ? 'checked' : '' ;?>> Female<br>
		</div>
    </div>

    @if ($edit)
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary" id="update-details-btn">
                <i class="fa fa-refresh"></i>
                @lang('app.update_details')
            </button>
        </div>
    @endif
</div>
