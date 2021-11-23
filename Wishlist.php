<?php session_start();?>
<?php include "header.php";?>
<title>Wishlist</title>
  <!-- Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Wishlist</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wishlist</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
          <?php 
          $Wishlist = array();
          if(isset($_GET['id'])){
            $id =$_GET['id'];
            if(isset($_SESSION['Wishlist'][$id])){
              $_SESSION['Wishlist'][$id]++;
            }
            else{
              $_SESSION['Wishlist'][$id] = 1;
            }
          }
          $Wishlist = $_SESSION['Wishlist']; 
          ?>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 17%">
                          Name
                      </th>
                      <th style="width: 10%">
                          Image
                      </th>
                      <th style='ưidth: 20%'>
                          description
                      </th>
                      <th>
                          Price
                      </th>
                      <th style="width:   10%">
                          type
                      </th>
                      <th >
                          Manufactures
                      </th>
                      <th>
                        Quantity
                      </th>
                      <th >
                        Action
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
                
              <?php 
              foreach($Wishlist as $key=>$qty):
                $getAllProducts = $product->getAllProducts();
                foreach($getAllProducts as $value):
                  if($key == $value['id']):
                ?>
                  <tr>
                    <td><?php echo $value['id']?></td>
                    <td><?php echo $value['name']?></td>
                    <td><img style="width:80px" src="./img/<?php echo $value['image']?>" alt=""></td>
                    <td><?php echo substr($value['description'],0,40)?><a href="details.php?id=<?php echo $value['id']?>"<?php echo $value['description']?>>[...]</a></td>
                    <td class='project_progress'><?php echo number_format($value['price'])?>VND</td>
                    <td class='project-state'>
                      <?php echo $value['type_name'] ?>
                      </td>
                      <td class='project-state'>
                      <?php echo $value['manu_name'] ?>
                      <td><?php echo $qty?></td>
                    </td>
                    <td class="project-actions ">
                      <a class="btn btn-danger btn-sm" href="del.php?id=<?php echo $value['id']?>">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
                  </tr>
                  <?php endif;
		endforeach;
	endforeach;?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include "footer.html";
