<h1 class="contact-h1">LET'S <span>TALK</span></h1>
<form action="email.php" method="get" class="row g-3 w-100 mx-auto bg-transparent m-2 border border-5 border-dark">
            <div class="mb-3">
                <label for="FormInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="FormInputName" name="form-name" placeholder="Name.." required>
              </div>
              <div class="mb-3">
                <label for="FormInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="FormInputEmail" name="form-from" placeholder="Email.." required>
              </div>
              <div class="mb-3">
                <label for="FormInputMsg" class="form-label">Message</label>
                <textarea class="form-control" id="FormInputMsg" name="form-message" rows="5" placeholder="Enter your Message here.." required></textarea>
              </div>
              <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-primary">Clean</button>
              </div>
            </form>
<?php 
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Need to fill the fields.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'error'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Error! Email not sent.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'ok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check2-circle"></i> Success! Email sent.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>