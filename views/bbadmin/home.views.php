 <?php
    include_once 'views/header.php';
    $_SESSION['bb_id']=18;

    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>


         <div class="info ">
             <div class="container">
                 <div class="heading">
                     Blood Bank Home admin
                 </div>
                 <form action="#">
                     <div class="form first">
                         <div class="details personal">
                             <span class="title">Personal Details</span>

                             <div class="fields">




                                 <div class="input_field">
                                     <label>E-mail</label>
                                     <input type="text" placeholder="Enter your e-mail" required>
                                 </div>

                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="Enter your password" required>
                                 </div>
                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="ReEnter your password" required>
                                 </div>










                             </div>

                             <input class="submit button" type="submit" name="edit-login" value="Update Login">
                         </div>
                     </div>
                 </form>
             </div>


             <div class="container">
                 <div class="heading">
                     Crediantals
                 </div>
                 <form action="#">
                     <div class="form first">
                         <div class="details personal">
                             <span class="title">Personal Details</span>

                             <div class="fields">




                                 <div class="input_field">
                                     <label>E-mail</label>
                                     <input type="text" placeholder="Enter your e-mail" required>
                                 </div>

                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="Enter your password" required>
                                 </div>
                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="ReEnter your password" required>
                                 </div>










                             </div>

                             <input class="submit button" type="submit" name="edit-login" value="Update Login">
                         </div>
                     </div>
                 </form>
             </div>


         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>