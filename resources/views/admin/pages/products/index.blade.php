@include('admin.includes.header')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Products</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div cslass="x_title">
                    <h2>Products List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Images</th>
                          <th>Code</th>
                          <th>Type</th>
                          <th>Quantity</th>
                          <th>Category</th>
                          <th>Price</th>
                           <th>Quantity</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Wrench</td>
                          <td><img src="{{asset('/store_admin/assets/images/product.jpg')}}" style="width: 50px;height: auto;"></td>
                          <td>2332</td>
                          <td>open end</td>
                          <td>53</td>
                          <td>Openend</td>
                          <td>$450</td>
                          <td>12</td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fa fa-trash"></span></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Wrench</td>
                          <td><img src="assets/images/product.jpg" style="width: 50px;height: auto;"></td>
                          <td>2332</td>
                          <td>open end</td>
                          <td>53</td>
                          <td>Openend</td>
                          <td>$450</td>
                          <td>34</td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fa fa-trash"></span></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Wrench</td>
                         <td><img src="assets/images/product.jpg" style="width: 50px;height: auto;"></td>
                          <td>2332</td>
                          <td>open end</td>
                          <td>53</td>
                          <td>Openend</td>
                          <td>$450</td>
                          <td>12</td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fa fa-trash"></span></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Wrench</td>
                          <td><img src="assets/images/product.jpg" style="width: 50px;height: auto;"></td>
                          <td>2332</td>
                          <td>open end</td>
                          <td>53</td>
                          <td>Openend</td>
                          <td>$450</td>
                          <td>8</td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fa fa-trash"></span></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Wrench</td>
                          <td><img src="assets/images/product.jpg" style="width: 50px;height: auto;"></td>
                          <td>2332</td>
                          <td>open end</td>
                          <td>53</td>
                          <td>Openend</td>
                          <td>$450</td>
                          <td>3</td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fa fa-trash"></span></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@include('admin.includes.footer')