 <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Dashboard</h1>
          </div>
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp;</li>

          </ol>
        </div>
<div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>News &amp; Events <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div>
              <div class="clearfix"></div>
              <p></p>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div contenteditable="true">
                    <h1>News &amp; Events</h1>
                  </div>
                </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">News &amp; Events Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-event-folder" data-toggle="modal" class="btn btn-success">Add New Event Folder &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New start-->
                  <div id="modal-add-event-folder" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Create New Event Folder</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="inputContent" rows="2" class="form-control" id="inputContent"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Date</label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy"/>
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Event Cover <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                    <input id="exampleInputFile1" type="file"/>
                                    <br/>
                                    <span class="help-block">(Image dimension: 600 x 400 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          <p>2014 Chinese New Year Celebration</p>
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                  
                  <p class="pull-right">Showing 1 to 10 of 57 entries</p>
                  <div class="clearfix"></div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="panel panel-primary">
                        <div class="panel-heading pan"> <a href="news_events_details.html"><img src="<?php echo base_url();?>/asset/admin/img/news_events/img_cny2014.jpg" class="img-responsive" alt="2014 Chinese New Year Celebration"/></a> </div>
                        <div class="panel-footer text-center">
                          <input type="checkbox"/>
                          <a href="news_events_details.html">2014 Chinese New Year Celebration</a>
                          <div class="clearfix"></div>
                          <a href="news_events_details.html" data-hover="tooltip" data-placement="top" title="View All Photos"><span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-event-folder-1" data-toggle="modal" title="Edit Event Folder"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="panel panel-primary">
                        <div class="panel-heading pan"> <a href="news_events_details.html"><img src="<?php echo base_url();?>/asset/admin/img/news_events/img_xmas2013.jpg" class="img-responsive" alt="2013 Christmas Celebration"/></a> </div>
                        <div class="panel-footer text-center">
                          <input type="checkbox"/>
                          <a href="news_events_details.html">2013 Christmas Celebration</a>
                          <div class="clearfix"></div>
                          <a href="news_events_details.html" data-hover="tooltip" data-placement="top" title="View All Photos"><span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-event-folder-2" data-toggle="modal" title="Edit Event Folder"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-2" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> </div>
                      </div>
                    </div>
                    
                    
                    
                    
                  </div>
                  <!-- End row -->
                  <!--Modal Edit event start-->
                  <div id="modal-edit-event-folder-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Edit Event Folder</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="inputContent" rows="2" class="form-control" id="inputContent" placeholder="Event Title">2014 Chinese New Year Celebration</textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Date </label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" value="02 Feb, 2014"/>
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Event Cover <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px"> <img src="../img/news_events/img_cny2014.jpg" alt="2014 Chinese New Year Celebration" class="img-responsive"><br/>
                                      <input id="exampleInputFile1" type="file"/>
                                      <br/>
                                      <span class="help-block">(Image dimension: 600 x 400 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Edit Event-->
                  <!--Modal delete start-->
                  <div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this event folder? </h4>
                        </div>
                        <div class="modal-body">
                          <p>2014 Chinese New Year Celebration</p>
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete end -->
                  <!--Modal Edit event start-->
                  <div id="modal-edit-event-folder-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Edit Event Folder</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="inputContent" rows="2" class="form-control" id="inputContent" placeholder="Event Title">2013 Christmas Celebration</textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Date </label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" value="24 Dec, 2013"/>
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Event Cover <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px"> <img src="<?php echo base_url();?>/asset/admin/img/news_events/img_xmas2013.jpg" alt="2013 Christmas Celebration" class="img-responsive"><br/>
                                      <input id="exampleInputFile1" type="file"/>
                                      <br/>
                                      <span class="help-block">(Image dimension: 600 x 400 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Edit Event-->
                  <!--Modal delete start-->
                  <div id="modal-delete-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this event folder? </h4>
                        </div>
                        <div class="modal-body">
                          <p>2013 Christmas Celebration</p>
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete end -->

                  <div class="tool-footer text-right">
                    <ul class="pagination pagination mtm mbm">
                      <li class="disabled"><a href="#">&laquo;</a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>
        </div>