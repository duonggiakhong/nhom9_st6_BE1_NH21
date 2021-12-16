<?php include "header.php";?>

  <!-- Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
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
                      <th style="width: 13%">
                          Manufactures
                      </th>
                      <th style="width:   10%">
                          type
                      </th>
                      <th>
                          Price
                      </th>
                      <th style="width: 10%">
                          Image
                      </th>
                      <th style='ưidth: 20%'>
                          description
                      </th>
                  
                      <th >
                        Action
                      </th>
                  </tr>
                 <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="submit" value="Upload Image" name="submit">
                </form> -->
              </thead>
              <tbody>
              <?php 
                $getAllProducts = $product->getAllProducts();
                foreach($getAllProducts as $value):
                ?>
                  <tr>
                    <td><?php echo $value['id']?></td>
                    <td><?php echo $value['name']?></td>
                    <td class='project-state'>
                      <?php echo $value['manu_name'] ?>
                    </td>
                    <td class='project-state'>
                      <?php echo $value['type_name'] ?>
                    </td>
                    <td class='project_progress'><?php echo number_format($value['price'])?>VND</td>
                    <td><img style="width:80px" src="../img/<?php echo $value['image']?>"></td>
                    <td><?php echo substr($value['description'],0,40)?><a href="details.php?id=<?php echo $value['id']?>"<?php echo $value['description']?>>[...]</a></td>

                    <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="editproduct.php?id=<?php echo $value['id']?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="delProduct.php?id=<?php echo $value['id']?>">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
                  </tr>
                  <?php endforeach;?>
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
