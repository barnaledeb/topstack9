<?php include('bobi/menu.php'); ?>
     
     <!--main content section starts--> 
     <div class="main-content">
     <div class="wrapper">
     
          <h1>Manage Admin</h1>
          <br><br>
          <!--button to add admin -->
          <a href="add-admin.php" class="btn-primary">Add Admin</a>
          <br><br>
<table class="tbl-full">
     <!-- <table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="1%" class="tbl-full"> -->
          <tr>
               
               <th>serial number</th>
               <th>Full name</th>
               <th>username</th>
               <th>Actions</th>
               
          </tr>
          <tr>
               <td>1.</td>
               <td>Barnale Deb</td>
               <td>barnaledeb</td>
               <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-denger">Delete Admin</a>
                    <br>
               </td>
               
          </tr>
          
          <tr>
               <td>2.</td>
               <td>Arna Deb </td>
               <td>Arnadeb</td>
               <td>
               <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-denger">Delete Admin</a>
               </td>
          </tr>

          <tr>
               <td>3.</td>
               <td>Sarnali Deb</td>
               <td>sarnalideb</td>
               <td>
               <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-denger">Delete Admin</a>
               </td>
          </tr>

     </table>

     </div>
     </div>
     <!--main content section ends--> 

     
     <?php include('bobi/footer.php'); ?>