






<?php foreach ($_SESSION['dg_result'] as $dgr): ?>

	<div class="row">
		<div class="col-md-9">
<div class="card"  >
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="d-inline-block mb-2 text-primary">
               <strong class="mb-0"><?php echo $dgr['name'];?></strong>
               </h3>
              <a class="text-dark" href="#"><?php echo "+880". $dgr['phone_no'];?></a>
              <div class="mb-1 text-muted"><?php echo  $dgr['email'];?></div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">View Profile</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo ROOT_URL_PREV.$dgr['profile_pic'];?>">
          </div>
        </div>
	</div>
</div>

<?php endforeach; ?>