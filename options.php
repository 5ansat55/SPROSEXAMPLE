<?php 
include 'header.php';

?>

<div class="container-fluid">
<div class="card">
<div class="card-header">
<h1 class="text-primary font-weight-bold">Ayarlar</h1>
</div>
<form class="p-3" action="options.php" methot="POST" accept-charset="utf-8">
    <div class="form-row my-2 col-md-6">
        <label>site's title</label>
    <input 
    class="form-control"  
    type="text"
    name="site_title"
    value="" />
    </div> 
    <div class="form-row my-2 col-md-6">
    <label>site's description</label>
    <input class="form-control"
     type="text" 
     name="site_description" 
     value=""
     />
    </div> 
    <div class="form-row my-2 col-md-6">
    <label>site's owner</label>
    <input class="form-control"
     type="text" 
     name="site_owner"
     value=""
     />
    </div> 
    <button
     class="btn btn-primary mt-2" 
     name="saveOptions"
     type="submit">kaydet
    </button>
</form>
</div>
</div>

<?php include 'footer.php' ?>
