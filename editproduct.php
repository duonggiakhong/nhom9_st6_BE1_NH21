<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Project </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Project</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="add.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-12 ">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <?php if(isset($_GET['id'])):
            $id = $_GET['id'];
            $getAllProducts = $product->getProductById($id);
            foreach($getAllProducts as $value):
              if($value['id']==$_GET['id']):

            ?>
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" name='name' value="<?php echo $value['name']?>">
            </div>
            <div class="form-group">
              <label for="inputStatus">manu_id</label>
              <select id="inputStatus" class="form-control custom-select" name='manu'>
                <?php ?>
                <option selected disabled><?php echo $value['manu_id']?></option>
                
                <?php 
                $getAllManufacture = $manufacture->getAllManufacture();
                foreach($getAllManufacture as $value):
                  ?>
                <option value=<?php echo $value['manu_id']?>><?php echo $value['manu_id']?> <?php echo $value['manu_name']?></option>
                  <?php endforeach?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputStatus">type_id</label>
              <select id="inputStatus" class="form-control custom-select" name='type'>
                <option selected disabled><?php echo $value['type_id'] ?></option>
                <?php 
              $getAllProtypes = $protypes->getAllProtypes();
              foreach($getAllProtypes as $value):
              ?>
              <option value=<?php echo $value['type_id']?> ><?php echo $value['type_id'] ?> <?php echo $value['type_name']?></option>
              <?php endforeach;?>
              </select>
            </div>
            
              
              
            <div class="form-group">
              <label for="inputClientCompany">price</label>
              <input type="text" id="inputClientCompany" class="form-control" name='price' value="<?php echo $value["price"]?>">
            </div>
            <div class="form-group">
                <label for="inputProjectLeader">image</label>
                <input type="file" name="image" id="inputProjectLeader" class="form-control" value="<?php echo $value["image"]?>">
            </div>
            <div class="form-group">
              <label for="inputDescription"> Description</label>
              <textarea name='description' id="inputDescription" class="form-control" rows="3"><?php echo $value["description"]?></textarea >
            </div>
            <div class="form-group">
              <label for="inputStatus">feature</label>
              <select id="inputStatus" class="form-control custom-select" name='feature'>
                <option selected disabled><?php echo $value["feature"]?></option>
              <option >0</option>
              <option >1</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <input name='submit' type="submit" value="Create new product" class="btn btn-success ">
        <!-- /<button type="submit" name="submit">Submit</button> -->
      </div>
    </div>
    </form>
    <?php
    endif;
  endforeach;
endif;
    ?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>