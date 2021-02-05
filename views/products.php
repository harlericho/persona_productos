<?php include_once "../templeates_login_register/header.php" ?>
<?php include_once "../template_index/nav.php" ?>


<script src="../functions/products.js" type="text/javascript"></script>

<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Products view</div>
                <br>
                <div class="col col-6 mt-2">
                    <button type="button" title="Add" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalAdd">
                        <i class="fa fa-plus-square"></i> Add
                    </button>
                </div>
                <div class="card-body">
                    <div id="table" class="table-responsive"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "modals.php" ?>


<script type="text/javascript">
views();
</script>
