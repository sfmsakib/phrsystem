






<?php foreach ($_SESSION['dr_result'] as $dgr): ?>

	<div class="row">
		<div class="col-md-9 offset-md-1">
<div class="container"  >
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="d-inline-block mb-2 text-primary">
               <strong class="mb-0"><?php echo $dgr['dr_name'];?></strong>
               </h3>
              <a class="text-dark" href="#"><?php echo $dgr['specialization'];?></a>
              <div class="mb-1 text-muted"><?php echo  $dgr['clinic_name'];?></div>
              <a href="#">View Profile</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo ROOT_URL_PREV.'uploads/profilepic/doc.png';?>">
          </div>
        </div>
	</div>
</div>

<?php endforeach; ?>