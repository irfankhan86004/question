<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">Name</label>
            <input type="text" class="form-control" id="name"
                   name="name" placeholder="Name" value="">
        </div>
        
    </div>

    <div class="col-md-6">
        
     
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
