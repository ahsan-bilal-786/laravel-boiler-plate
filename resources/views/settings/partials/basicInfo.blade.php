<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>Telephone # 1</label>
            {!! Form::text('tel_1', (isset($settings['tel_1']) ? $settings['tel_1'] : ''), array('placeholder' => 'Telephone # 1','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <label>Telephone # 2</label>
            {!! Form::text('tel_2', (isset($settings['tel_2']) ? $settings['tel_2'] : ''), array('placeholder' => 'Telephone # 2','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <label>Fax # 1</label>
            {!! Form::text('fax_1', (isset($settings['fax_1']) ? $settings['fax_1'] : ''), array('placeholder' => 'Fax # 1','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <label>Fax # 2</label>
            {!! Form::text('fax_2', (isset($settings['fax_2']) ? $settings['fax_2'] : ''), array('placeholder' => 'Fax # 2','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <label>Order ID Start From</label>
            {!! Form::text('order_id_start', (isset($settings['order_id_start']) ? $settings['order_id_start'] : ''), array('placeholder' => 'Enter Order ID','class' => 'form-control')) !!}
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="form-group">
            <label>Address</label>
            {!! Form::textarea('address', (isset($settings['address']) ? $settings['address'] : ''), array('placeholder' => 'Address','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-lg-6">
        
    </div>
    <!-- /.col-lg-6 (nested) -->
    <div class="clearfix"></div>
    <!-- /.col-lg-6 (nested) -->
    <div class="col-lg-6">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>    
</div>
<!-- /.row (nested) -->