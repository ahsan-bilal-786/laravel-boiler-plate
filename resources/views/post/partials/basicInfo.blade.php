<div class="row">
    <div class="col-lg-6">
            <div class="form-group">
                <label>Name</label>
                {!! Form::text('name', null, array('placeholder' => 'Post Name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label>Content</label>
                {!! Form::text('content', null, array('placeholder' => 'Enter Content','class' => 'form-control')) !!}
            </div>
        
    </div>
    <!-- /.col-lg-6 (nested) -->
    
    <div class="clearfix"></div>
 
    <div class="clearfix clearfix-sp"></div>

    <!-- /.col-lg-6 (nested) -->
    <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>    
</div>
<!-- /.row (nested) -->
