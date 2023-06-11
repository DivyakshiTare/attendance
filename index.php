<?php
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialities();
?>

<h1 class="text-center">Registration for IT Conference</h1>

<!-- get method
  <form method="get" action="success.php">-->
<form method="POST" action="success.php"> 
  <div class="form-group">
    <label for="First name">First name</label>
    <input required type="text" class="form-control" id="First name" placeholder="Enter First name" name="firstname">
  </div>
  <div class="form-group">
    <label for="Last name">Last name</label>
    <input required type="text" class="form-control" id="Last name" placeholder="Enter Last name" name="lastname">
  </div>
  <div class="form-group">
    <label for="dob">Date Of Birth</label>
    <input required type="date" class="form-control" id="datepicker" name="date">
  </div>
  <div class="form-group">
    <label for="speciality">Area of Expertise</label>
    <select class="form-control" id="speciality" name="speciality">
    <?php 
        while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
          <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name'];?></option>
    <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email Address" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="number">Contact number</label>
    <input required type="text" class="form-control" id="phone" placeholder="Enter number" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button> 
</form>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>