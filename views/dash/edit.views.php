<?php 
//get user
$user = new Model();
$user->table = "user";
$data = [
    "id" => "6"
];
$data_not=['fname'];
$result = $user->where($data );
show($result);

// print $result['fname'];


if(isset($_POST['submit'])){
    $user->table = "user";
    $data = [
        "id" => $_POST['id'], 
        "lname" => $_POST['email']
    ];
    $user->update(6,$data);
    redirect("edit");
}


?>

<form action="edit" method="post">
 <?php foreach($result as $row){ ?>
    <input type="hidden" name="id" value="<?= $row->id; ?>">
    <input type="text" name="name" value="<?= $row->fname; ?>">
    <input type="text" name="email" value="<?= $row->lname; ?>">
  
    <input type="submit" name="submit" value="submit">
<?php }?>

</form>