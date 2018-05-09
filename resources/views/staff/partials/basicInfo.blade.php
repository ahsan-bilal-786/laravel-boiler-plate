<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Info
            </div>
            <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name</label>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'readonly' => (\Auth::user()->hasRole('admin') ? false : true))) !!}
                        </div>
                        <div class="form-group">
                            <label>Primary Phone No</label>
                            {!! Form::text('contact_no', null, array('placeholder' => 'Contact Number','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label>Secondary Phone No</label>
                            {!! Form::text('contact_no_2', null, array('placeholder' => 'Secondary Contact Number','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
                        </div>    
                        <div class="form-group">
                            <label>Photo</label>
                            <input name="photo" type="file" class="form-control" value="Upload"/>
                            @if(isset($user->photo->path))
                            <img src="{!!url('app_files/'.$user->photo->path) !!}"  alt="user photo" width="100px"/>
                            @endif
                        </div>
					</div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'readonly' => (\Auth::user()->hasRole('admin') ? false : true))) !!}
                        </div>
    
                        <div class="form-group">
                            <label>Password</label>
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        </div>
                        @if ((\Auth::user()->hasRole('admin') && (isset($user) && $user->roles[0]->name !== 'admin')) || !isset($user))
                        <div class="form-group">
                            <label>Account Status</label>
                            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Blocked'),null, array('class' => 'form-control')) !!}
                        </div>
                        @endif

                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>    
                </div>
                <!-- /.row (nested) -->
                </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->