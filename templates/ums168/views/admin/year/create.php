<?php
    require_once '../../../config/config.php';
    require_once '../../../connection/db.php';
    $title = "Create Year";
    ob_start();
?>
<h4 class="fw-bold mb-3">បញ្ចូល ឆ្នាំ</h4>
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?php echo BASE_URL ?>actionYear.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">ឈ្មោះខ្មែរ</label>
                <input type="text" required name="YearNameKH" class="form-control" id="basic-default-fullname" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">ឈ្មោះឡាតាំង</label>
                <input type="text" required name="YearNameEN" class="form-control" id="basic-default-fullname" />
              </div>
            </div>
          </div>
          <div>
            <button type="submit" name="btnAdd" class="btn  btn-primary">Save</button>
            <a href="index.php">
              <button type="button" class="btn  btn-secondary">Cancel</button>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
    $content = ob_get_clean();
include BASE_PATH . 'views/admin/master.php';
?>