<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?= base_url('adminR/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('adminR/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('adminR/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url('adminR/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('adminR/build/css/custom.min.css') ?>" rel="stylesheet">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Clarish</span></a>
          </div>

          <div class="clearfix"></div>

          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Clarish</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/index.html">Dashboard</a></li>
                    <li><a href="/adminR/production/index2.html">Dashboard2</a></li>
                    <li><a href="/adminR/production/index3.html">Dashboard3</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/form.html">General Form</a></li>
                    <li><a href="/adminR/production/form_advanced.html">Advanced Components</a></li>
                    <li><a href="/adminR/production/form_validation.html">Form Validation</a></li>
                    <li><a href="/adminR/production/form_wizards.html">Form Wizard</a></li>
                    <li><a href="/adminR/production/form_upload.html">Form Upload</a></li>
                    <li><a href="/adminR/production/form_buttons.html">Form Buttons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/general_elements.html">General Elements</a></li>
                    <li><a href="/adminR/production/media_gallery.html">Media Gallery</a></li>
                    <li><a href="/adminR/production/typography.html">Typography</a></li>
                    <li><a href="/adminR/production/icons.html">Icons</a></li>
                    <li><a href="/adminR/production/glyphicons.html">Glyphicons</a></li>
                    <li><a href="/adminR/production/widgets.html">Widgets</a></li>
                    <li><a href="/adminR/production/invoice.html">Invoice</a></li>
                    <li><a href="/adminR/production/inbox.html">Inbox</a></li>
                    <li><a href="/adminR/production/calendar.html">Calendar</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/tables.html">Tables</a></li>
                    <li><a href="/adminR/production/tables_dynamic.html">Table Dynamic</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/chartjs.html">Chart JS</a></li>
                    <li><a href="/adminR/production/chartjs2.html">Chart JS2</a></li>
                    <li><a href="/adminR/production/morisjs.html">Moris JS</a></li>
                    <li><a href="/adminR/production/echarts.html">ECharts</a></li>
                    <li><a href="/adminR/production/other_charts.html">Other Charts</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="/adminR/production/fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/e_commerce.html">E-commerce</a></li>
                    <li><a href="/adminR/production/projects.html">Projects</a></li>
                    <li><a href="/adminR/production/project_detail.html">Project Detail</a></li>
                    <li><a href="/adminR/production/contacts.html">Contacts</a></li>
                    <li><a href="/adminR/production/profile.html">Profile</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/adminR/production/page_403.html">403 Error</a></li>
                    <li><a href="/adminR/production/page_404.html">404 Error</a></li>
                    <li><a href="/adminR/production/page_500.html">500 Error</a></li>
                    <li><a href="/adminR/production/plain_page.html">Plain Page</a></li>
                    <li><a href="/adminR/production/login.html">Login Page</a></li>
                    <li><a href="/adminR/production/pricing_tables.html">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="level2.html">Level Two</a>
                        </li>
                        <li><a href="#level2_1">Level Two</a>
                        </li>
                        <li><a href="#level2_2">Level Two</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="">
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="Profile Image" /></span>
                      <span>
                        <span>Clarish Jabonillo</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="Profile Image" /></span>
                      <span>
                        <span>Clarish Jabonillo</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Why don't programmers like nature? It has too many bugs.. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="Profile Image" /></span>
                      <span>
                        <span>Clarish Jabonillo</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= base_url('/adminR/production/images/profile-pic.png') ?>" alt="Profile Image" /></span>
                      <span>
                        <span>Clarish Jabonillo</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="clearfix"></div>

          <div class="row" style="display: block;">

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Product Information<small>E-commerce</small></h2>
                  <a href="/signup" class="btn btn-info float-end">Add Admin</a>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</a>

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title a-center">Image</th>
                          <th class="column-title a-center">ID</th>
                          <th class="column-title a-center">Name</th>
                          <th class="column-title a-center">Description</th>
                          <th class="column-title a-center">Price</th>
                          <th class="column-title a-center">Category </th>
                          <th class="column-title a-center">Quantity </th>
                          <th class="column-title no-link last"><span class="nobr">Action</span>
                          </th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($products as $prod) : ?>
                          <tr class="even pointer ">
                            <td class="a-center">
                              <img src="<?= $prod['image'] ?>" style="width: 50px; ">
                            </td>
                            <td class="a-center">
                              <?= $prod['product_id'] ?>
                            </td>
                            <td class="a-center">
                              <?= $prod['name'] ?>
                            </td>
                            <td class="a-center">
                              <?= $prod['description'] ?>
                            </td>
                            <td class="a-center">
                              ₱<?= $prod['price'] ?>
                            </td>
                            <td class="a-center">
                              <?php
                              foreach ($category as $cat) {
                                if ($cat['category_id'] == $prod['category_id']) {
                                  $categoryName = ucwords($cat['category_name']);
                                  break;
                                }
                              }
                              echo $categoryName;
                              ?>
                            </td>
                            <td class="a-center">
                              <?= $prod['quantity'] ?>
                            </td>
                            <td class=" last">
                              <a href="#" class="btn btn-primary btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editProductModal" data-product-id="<?= $prod['product_id'] ?>" data-product-image="<?= $prod['image'] ?>" data-product-name="<?= $prod['name'] ?>" data-product-description="<?= $prod['description'] ?>" data-product-price="<?= $prod['price'] ?>" data-product-category="<?php foreach ($category as $cat) {
                                                                                                                                                                                                                                                                                                                                                                                                            if ($cat['category_id'] == $prod['category_id']) {
                                                                                                                                                                                                                                                                                                                                                                                                              $categoryName = ucwords($cat['category_name']);
                                                                                                                                                                                                                                                                                                                                                                                                              break;
                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                          }
                                                                                                                                                                                                                                                                                                                                                                                                          echo $categoryName; ?>" data-product-quantity="<?= $prod['quantity'] ?>">
                                Edit
                              </a>
                              <a href="/delete/<?= $prod['product_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <!--Add Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="\add" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" id="category" name="category" required>
                <?php foreach ($category as $cat) : ?>
                  <?php
                  $categoryName = ucwords($cat['category_name']);
                  $categoryId = $cat['category_id'];
                  ?>
                  <option value="<?php echo $categoryId; ?>"><?php echo $categoryName; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save Product</button>
        </div>
      </div>
    </div>
  </div>
  <!--Edit Modal -->
  <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="\add" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <input type="hidden" class="form-control" id="eproduct_id" name="product_id" value="" required>
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="eimage" name="image" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="ename" name="name" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="edescription" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="eprice" name="price" step="0.01" required>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" id="ecategory" name="category" required>
                <?php foreach ($category as $cat) : ?>
                  <?php
                  $categoryName = ucwords($cat['category_name']);
                  $categoryId = $cat['category_id'];
                  ?>
                  <option value="<?php echo $categoryId; ?>"><?php echo $categoryName; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="number" class="form-control" id="equantity" name="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="<?= base_url('adminR/vendors/jquery/dist/jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('adminR/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- FastClick -->
  <script src="<?= base_url('adminR/vendors/fastclick/lib/fastclick.js') ?>"></script>
  <!-- NProgress -->
  <script src="<?= base_url('adminR/vendors/nprogress/nprogress.js') ?>"></script>
  <!-- iCheck -->
  <script src="<?= base_url('adminR/vendors/iCheck/icheck.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="<?= base_url('adminR/build/js/custom.min.js') ?>"></script>
  <script>
    $(document).ready(function() {
      $('.edit-button').on('click', function() {
        var productId = $(this).data('product-id');
        var productImage = $(this).data('product-image');
        var productName = $(this).data('product-name');
        var productDescription = $(this).data('product-description');
        var productPrice = $(this).data('product-price');
        var productCategory = $(this).data('product-category');
        var productQuantity = $(this).data('product-quantity');

        $('#eproduct_id').val(productId);
        $('#ename').val(productName);
        $('#edescription').val(productDescription);
        $('#eprice').val(productPrice);
        $('#ecategory').val(productCategory);
        $('#equantity').val(productQuantity);
      });
    });
  </script>
</body>

</html>