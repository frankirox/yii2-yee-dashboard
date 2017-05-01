<?php
/* @var $this yii\web\View */

$this->title = 'Advanced Form Elements';
?>

<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Bootstrap Switch</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <input type="checkbox" class="switch" data-size="mini">
                <input type="checkbox" class="switch" data-size="mini" checked="true">
                <input type="checkbox" class="switch" data-size="mini" disabled="true" checked="true">
                <input type="checkbox" class="switch" data-size="mini" readonly="true" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-indeterminate="true" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-inverse="true" checked="true">
            </div>
            <div class="col-md-12">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="primary" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="info" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="success" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="warning" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="danger" checked="true">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="default" checked="true">
            </div>
            <div class="col-md-12">
                <input type="checkbox" class="switch" data-size="mini" data-on-color="primary" checked="true">
                <input type="checkbox" class="switch" data-size="small" data-on-color="primary" checked="true">
                <input type="checkbox" class="switch" data-size="normal" data-on-color="primary" checked="true">
                <input type="checkbox" class="switch" data-size="large" data-on-color="primary" checked="true">
            </div>
        </div>
    </div>
</div>


<!-- iCheck -->
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" disabled>
                        Default checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="primary" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="primary">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="primary" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="primary" disabled>
                        Primary checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="warning" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="warning">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="warning" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="warning" disabled>
                        Warning checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="success" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="success">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="success" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="success" disabled>
                        Success checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="danger" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="danger">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="danger" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="danger" disabled>
                        Danger checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="info" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="info">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="info" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="info" disabled>
                        Info checkbox
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-default" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-default">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-default" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-default" disabled>
                        Info checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-primary" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-primary">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-primary" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-primary" disabled>
                        Primary checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-warning" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-warning">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-warning" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-warning" disabled>
                        Warning checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-success" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-success">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-success" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-success" disabled>
                        Success checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-danger" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-danger">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-danger" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-danger" disabled>
                        Danger checkbox
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-info" checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-info">
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-info" disabled checked>
                    </label>
                    <label>
                        <input type="checkbox" class="checkbox" data-color="solid-info" disabled>
                        Info checkbox
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="r1" class="radio" checked>
                    </label>
                    <label>
                        <input type="radio" name="r1" class="radio">
                    </label>
                    <label>
                        <input type="radio" name="r11" class="radio" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r11" class="radio" disabled>
                    </label>
                    <label>
                        Default radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r2" class="radio" data-color="primary" checked>
                    </label>
                    <label>
                        <input type="radio" name="r2" class="radio" data-color="primary">
                    </label>
                    <label>
                        <input type="radio" name="r22" class="radio" data-color="primary" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r22" class="radio" data-color="primary" disabled>
                    </label>
                    <label>
                        Primary radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r3" class="radio" data-color="warning" checked>
                    </label>
                    <label>
                        <input type="radio" name="r3" class="radio" data-color="warning">
                    </label>
                    <label>
                        <input type="radio" name="r32" class="radio" data-color="warning" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r32" class="radio" data-color="warning" disabled>
                    </label>
                    <label>
                        Warning radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r4" class="radio" data-color="success" checked>
                    </label>
                    <label>
                        <input type="radio" name="r4" class="radio" data-color="success">
                    </label>
                    <label>
                        <input type="radio" name="r42" class="radio" data-color="success" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r42" class="radio" data-color="success" disabled>
                    </label>
                    <label>
                        Success radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r5" class="radio" data-color="danger" checked>
                    </label>
                    <label>
                        <input type="radio" name="r5" class="radio" data-color="danger">
                    </label>
                    <label>
                        <input type="radio" name="r52" class="radio" data-color="danger" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r52" class="radio" data-color="danger" disabled>
                    </label>
                    <label>
                        Danger radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r6" class="radio" data-color="info" checked>
                    </label>
                    <label>
                        <input type="radio" name="r6" class="radio" data-color="info">
                    </label>
                    <label>
                        <input type="radio" name="r62" class="radio" data-color="info" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r62" class="radio" data-color="info" disabled>
                    </label>
                    <label>
                        Info radio
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="r7" class="radio" data-color="solid-default" checked>
                    </label>
                    <label>
                        <input type="radio" name="r7" class="radio" data-color="solid-default">
                    </label>
                    <label>
                        <input type="radio" name="r72" class="radio" data-color="solid-default" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r72" class="radio" data-color="solid-default" disabled>
                    </label>
                    <label>
                        Solid default radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r8" class="radio" data-color="solid-default" checked>
                    </label>
                    <label>
                        <input type="radio" name="r8" class="radio" data-color="solid-primary">
                    </label>
                    <label>
                        <input type="radio" name="r82" class="radio" data-color="solid-primary" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r82" class="radio" data-color="solid-primary" disabled>
                    </label>
                    <label>
                        Solid primary radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r9" class="radio" data-color="solid-warning" checked>
                    </label>
                    <label>
                        <input type="radio" name="r9" class="radio" data-color="solid-warning">
                    </label>
                    <label>
                        <input type="radio" name="r92" class="radio" data-color="solid-warning" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r92" class="radio" data-color="solid-warning" disabled>
                    </label>
                    <label>
                        Solid warning radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="r0" class="radio" data-color="solid-success" checked>
                    </label>
                    <label>
                        <input type="radio" name="r0" class="radio" data-color="solid-success">
                    </label>
                    <label>
                        <input type="radio" name="r02" class="radio" data-color="solid-success" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="r02" class="radio" data-color="solid-success" disabled>
                    </label>
                    <label>
                        Solid success radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="ra" class="radio" data-color="solid-danger" checked>
                    </label>
                    <label>
                        <input type="radio" name="ra" class="radio" data-color="solid-danger">
                    </label>
                    <label>
                        <input type="radio" name="ra2" class="radio" data-color="solid-danger" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="ra2" class="radio" data-color="solid-danger" disabled>
                    </label>
                    <label>
                        Solid danger radio
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="radio" name="rb" class="radio" data-color="solid-info" checked>
                    </label>
                    <label>
                        <input type="radio" name="rb" class="radio" data-color="solid-info">
                    </label>
                    <label>
                        <input type="radio" name="rb2" class="radio" data-color="solid-info" checked disabled>
                    </label>
                    <label>
                        <input type="radio" name="rb2" class="radio" data-color="solid-info" disabled>
                    </label>
                    <label>
                        Solid info radio
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Select2</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Disabled</label>
                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Multiple</label>
                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Disabled Result</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option disabled="disabled">California (disabled)</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
        the plugin.
    </div>
</div>
<!-- /.box -->

<div class="row">
    <div class="col-md-6">

        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Input masks</h3>
            </div>
            <div class="box-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label>Date masks:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                    <label>US phone mask:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                    <label>Intl US phone mask:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- IP mask -->
                <div class="form-group">
                    <label>IP mask:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Color & Time Picker</h3>
            </div>
            <div class="box-body">
                <!-- Color Picker -->
                <div class="form-group">
                    <label>Color picker:</label>
                    <input type="text" class="form-control my-colorpicker1">
                </div>
                <!-- /.form group -->

                <!-- Color Picker -->
                <div class="form-group">
                    <label>Color picker with addon:</label>

                    <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control">

                        <div class="input-group-addon">
                            <i></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Time picker:</label>

                        <div class="input-group">
                            <input type="text" class="form-control timepicker">

                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col (left) -->
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
                <!-- Date -->
                <div class="form-group">
                    <label>Date:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date range -->
                <div class="form-group">
                    <label>Date range:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                    <label>Date and time range:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservationtime">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                    <label>Date range button:</label>

                    <div class="input-group">
                        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                            <span>
                                <i class="fa fa-calendar"></i> Date range picker
                            </span>
                            <i class="fa fa-caret-down"></i>
                        </button>
                    </div>
                </div>
                <!-- /.form group -->

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->


        <!-- /.box -->
    </div>
    <!-- /.col (right) -->
</div>
<!-- /.row -->

