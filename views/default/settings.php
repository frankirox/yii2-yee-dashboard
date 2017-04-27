<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->registerJs('$.fn.bootstrapSwitch.defaults.labelWidth = 0;');
$this->registerJs('$.fn.bootstrapSwitch.defaults.onColor = "success";');
$this->registerJs('$("input.switch").bootstrapSwitch();');

$this->registerCss("
.list-layouts > li {
    float:left; 
    width: 33.333333%; 
    padding: 5px;
}

.list-layouts > li > a {
    display: block;
    cursor: pointer;
}

.list-layouts > li > a > div > span {
    display: block; 
    float: left; 
    height: 7px; 
    border: 1px solid #28313d;
    background: #fefefe;
}

.list-layouts > li > p {
    font-size: 12px
}

        ");
?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-gears"></i></a></li>
        <li class=""><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-language"></i></a></li>
        <li class=""><a href="#control-sidebar-home-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-dashboard"></i></a></li>

    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="control-sidebar-settings-tab">

            <form method="post">
                <h4 class="control-sidebar-heading">General Settings</h4>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked="">
                    </label>
                    <p>Some information about this general settings option</p>
                </div>


                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked="">
                    </label>
                    <p>Other sets of options are available</p>
                </div>

                <h4 class="control-sidebar-heading">Chat Settings</h4>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked="">
                    </label>
                </div>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>

                <br/>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Clear site cache
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>

                <h4 class="control-sidebar-heading">Skins</h4>
                <ul class="list-unstyled clearfix">
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0);" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span>
                                <span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                            </div>
                        </a>
                        <p class="text-center no-margin">Blue</p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0);" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                            <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                <span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span>
                                <span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                            </div>
                        </a>
                        <p class="text-center no-margin">Black</p>
                    </li>
                    <li style="float:left; width: 33.33333%; padding: 5px;">
                        <a href="javascript:void(0);" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span>
                                <span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span>
                            </div>
                            <div>
                                <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span>
                                <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                            </div>
                        </a>
                        <p class="text-center no-margin">Purple</p>
                    </li>
                </ul>



            </form>
        </div>


        <div class="tab-pane" id="control-sidebar-theme-demo-options-tab">
            <div>






            </div>
        </div>


        <div class="tab-pane" id="control-sidebar-home-tab">

            <h4 class="control-sidebar-heading">Dashboard Widgets</h4>
            <div class="form-group">
                <p>Dashboard widgets display latest site activity.</p>
            </div>

            <div class="form-group">
                <label class="control-sidebar-subheading">
                    Pages
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="true">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Posts
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Comments
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Media
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="">
                    </div>
                </label>
            </div>

            <h4 class="control-sidebar-heading">Info Box Settings</h4>
            <div class="form-group">
                <label class="control-sidebar-subheading">
                    Display Info Box
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="">
                    </div>
                </label>
                <p>Info box blocks display short site statistic. Select blocks to display in the box:</p>
            </div>

            <div class="form-group">
                <label class="control-sidebar-subheading">
                    Comments 
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Users 
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Posts 
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Uploads 
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini">
                    </div>
                </label>

                <label class="control-sidebar-subheading">
                    Likes 
                    <div class="pull-right">
                        <input type="checkbox" name="my-checkbox" class="switch" data-size="mini" checked="">
                    </div>
                </label>
            </div>

            <h4 class="control-sidebar-heading">Dashboard Layout</h4>
            <ul class="list-unstyled list-layouts clearfix">
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Full Width</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Two Columns</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Small Left</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Big Left</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                        <div>
                            <span style="width: 50%;"></span>
                            <span style="width: 50%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 10px">Two Rows Type 1</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                        <div>
                            <span style="width: 33%;"></span>
                            <span style="width: 67%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 10px">Two Rows Type 2</p>
                </li>
                <li>
                    <a data-skin="skin-black" class="clearfix full-opacity-hover">
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 100%;"></span>
                        </div>
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                        <div>
                            <span style="width: 67%;"></span>
                            <span style="width: 33%;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 10px">Two Rows Type 3</p>
                </li>
            </ul>

        </div>




    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

