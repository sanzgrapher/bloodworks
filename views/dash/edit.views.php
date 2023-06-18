<?php
//get user
$user = new Model();
$user->table = "user";
$data = [
    "id" => "6"
];
$data_not = ['fname'];
$result = $user->where($data);
show($result);

// print $result['fname'];


if (isset($_POST['submit'])) {
    $user->table = "user";
    $data = [
        "id" => $_POST['id'],
        "fname" => $_POST['fname'],
        "email" => $_POST['email']
    ];
    $user->update(6, $data);
    $cookie_value = "avaiable";
    setcookie("STATUS", $cookie_value, time() + (60), "/"); // 86400 = 1 day



    // redirect("edit");
}
$cookie_name = "status";


?>
<ul>
    <li><a href="home">Home</a></li>
    <li><a href="blood-banks">Bloodbanks</a></li>
    <li><a href="Donor-list">Donor lists</a></li>
    <li><a href="dash/edit">Donor lists</a></li>
</ul>
<?php
if (!isset($_COOKIE["STATUS"])) {
    // echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "NOT SET";
} else {
    echo "Cookie 'STATUS' is set!<br>";
    echo "Value is: " . $_COOKIE["STATUS"];
    echo "SET";
}
?>


<form action="edit" method="post">
    <?php foreach ($result as $row) { ?>
        <input type="hidden" name="id" value="<?= $row->id; ?>">
        <input type="text" name="fname" value="<?= $row->fname; ?>">
        <input type="text" name="email" value="<?= $row->email; ?>">

        <input type="submit" name="submit" value="submit">
    <?php } ?>

</form>


<!-- Basic Details -->
<h3>basic details</h3>
<form action="edit" method="post">
    <label for="fname">First Name</label>
    <input type="text" name="fname" value="<?= $row->fname; ?>">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" value="<?= $row->lname; ?>">
    <label for="email">Email</label>
    <input type="text" name="email" value="<?= $row->email; ?>">
    <label for="phone">Phone</label>
    <input type="text" name="phone" value=" ">
    <label for="dob">Date of Birth</label>
    <input type="date" name="dob" value=" ">
    <label for="gender">gender</label>
    <select name="gender" id="gender">
        <option value="male">M</option>
        <option value="female">F</option>
        <option value="other">other</option>
    </select>


</form>

<h3>medical details</h3>
<form action="edit" method="post">
    <label for="bloodgrou">Blood Group </label>
    <select name="bloodgroup" id="bloodgroup">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
    </select>
    
    
</form>
<h3>Address</h3>

