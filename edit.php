<?php
    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialities();

    if(!isset($_GET['id'])){
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);


?>

<h1 class="text-center">Edit Record</h1>

<!-- get method
  <form method="get" action="success.php">-->
<form method="POST" action="editpost.php"> 
  <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
  <div class="form-group">
    <label for="First name">First name</label>
    <input type="text" class="form-control" value="<?php echo $attendee['firstname']?>" id="First name" placeholder="Enter First name" name="firstname">
  </div>
  <div class="form-group">
    <label for="Last name">Last name</label>
    <input type="text" class="form-control" value="<?php echo $attendee['lastname']?>"  id="Last name" placeholder="Enter Last name" name="lastname">
  </div>
  <div class="form-group">
    <label for="dob">Date Of Birth</label>
    <input type="date" class="form-control" value="<?php echo $attendee['dateofbirth']?>" id="datepicker" name="date">
  </div>
  <div class="form-group">
    <label for="speciality">Area of Expertise</label>
    <select class="form-control"  id="speciality" name="speciality">
    <?php
            while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r['speciality_id'] ?>"<?php if($r['speciality_id']== $attendee['speciality_id']) echo 'selected' ?>>
          <?php echo $r['name'];?>
        </option>
    <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" value="<?php echo $attendee['emailaddress']?>" id="InputEmail1" placeholder="Enter Email Address" name="email" >
    <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="number">Contact Number</label>
    <input type="text" class="form-control" value="<?php echo $attendee['contactnumber']?>" id="phone" placeholder="Enter number" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value="<?php echo $attendee['firstname']?>" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
 
  <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button> 
</form>

<?php }?>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>