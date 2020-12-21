<?php
include "../../header.php";
?>

 v<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          
          
      
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Manajemen Kategori</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">Kembali ke data Kategori <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">
                  <form action="simpan_kategori.php" method="POST">
                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input type="text" class="form-control" name="Namakategori">
                    </div>

                    </div>
              <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
              </div>
            
          </div>
        </section>
      </div>

<?php
include "../../footer.php";
?>