<?php 
    
     require_once 'db/conn.php'; 
 
     $results = $crud->getSpecialities();
 

if(isset($_POST['submit'])) {
    $id = $_POST['id'];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['date'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $speciality = $_POST['speciality'];

    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality);

    if($result) {
        header('Location: viewrecords.php');
    } else {
        echo "Error";
    }
}
else{
    echo "Error";
}

 
?>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
