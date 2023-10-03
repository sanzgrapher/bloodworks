<?php include "header.php"; 
?>


<section class="bb-profile-container">
        <div class="bb-profile ">
            <div class="profile-name-container">
                
                <div class="title-con">
                <img src="https://resources.premierleague.com/premierleague/badges/rb/t43.svg" alt="" class="profile-img1">
                <div class="title-contain">
                                    <h3>Manchester City
                                        </h3>
                                    <h4>
                                        Etihad Stadium, Manchester<br>
                                        Est: 1887</h1>
                                </div>
                </div>
            </div>

        </div>

        <div class="tab-main-container">
        <div class="tab-container">
        <div class="topnav" id="myTopnav1">
            <div class="tab">
                <a href="#"><button class="tablinks active" onclick="openTab(event, 'Overview')">Overview</button></a>
                <a href="#"><button class="tablinks" onclick="openTab(event, 'Events')" id="defaultOpen">Events</button></a>
                <a href="#"><button class="tablinks" onclick="openTab(event,'Stocks')">Stocks</button></a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                    <i class="fa fa-bars"></i>
                  </a>
            </div>
        </div>


        <div id="Overview" class="tabcontent" style="display:block">
                <div class="container">
                    <h1 class="table-sec-title fw-bold display-5">
                        Blood Bank's Details
                    </h1>
                    <h2>About Blodd Bank</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sapiente autem sit hic repudiandae. Reiciendis facilis adipisci sit laborum accusantium. Fugit fugiat dolore neque enim illo architecto. Aut, quis unde.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum laboriosam, assumenda quis animi, quas vero eius distinctio ipsa facilis ea, atque sed ipsum repellat dolore totam corporis unde harum explicabo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum iusto odit aperiam veritatis laboriosam autem quo inventore, quisquam eaque esse expedita voluptatem fugiat error ullam libero blanditiis ad recusandae dolor.
                    </p>

                    <h2>About Blodd Bank</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sapiente autem sit hic repudiandae. Reiciendis facilis adipisci sit laborum accusantium. Fugit fugiat dolore neque enim illo architecto. Aut, quis unde.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum laboriosam, assumenda quis animi, quas vero eius distinctio ipsa facilis ea, atque sed ipsum repellat dolore totam corporis unde harum explicabo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum iusto odit aperiam veritatis laboriosam autem quo inventore, quisquam eaque esse expedita voluptatem fugiat error ullam libero blanditiis ad recusandae dolor.
                    </p>

                    <h2>About Blodd Bank</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sapiente autem sit hic repudiandae. Reiciendis facilis adipisci sit laborum accusantium. Fugit fugiat dolore neque enim illo architecto. Aut, quis unde.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum laboriosam, assumenda quis animi, quas vero eius distinctio ipsa facilis ea, atque sed ipsum repellat dolore totam corporis unde harum explicabo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum iusto odit aperiam veritatis laboriosam autem quo inventore, quisquam eaque esse expedita voluptatem fugiat error ullam libero blanditiis ad recusandae dolor.
                    </p>
                </div>
        </div>

        
        <div id="Events" class="tabcontent" >
        <div class="container">
                <h1 class="table-sec-title fw-bold display-5">Available events</h1>
                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Event Location</th>
                                    <th>Organizers</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tr>
                                    <td>1</td>
                                    <td>Event1</td>
                                    <td>Kathmandu</td>
                                    <td>Kaybdy</td>
                                    <td>9823452345</td>
                                    <td><a class="btn btn-danger" href="#">Take Part</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Event2/td>
                                    <td>Pokhara</td>
                                    <td>Oshy</td>
                                    <td>9823487345</td>
                                    <td><a class="btn btn-danger" href="#">Take Part</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Event3</td>
                                    <td>Kathmandu</td>
                                    <td>Kaybdy</td>
                                    <td>9823452345</td>
                                    <td><a class="btn btn-danger" href="#">Take Part</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Event4</td>
                                    <td>Kathmandu</td>
                                    <td>Kaybdy</td>
                                    <td>9823452345</td>
                                    <td><a class="btn btn-danger" href="#">Take Part</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Event5</td>
                                    <td>Kathmandu</td>
                                    <td>Kaybdy</td>
                                    <td>9823452345</td>
                                    <td><a class="btn btn-danger" href="#">Take Part</a></td>
                                </tr>
                        </table>
                    </div>
                </div>  
            </div>    
        </div>

        <div id="Stocks" class="tabcontent">
            <div class="container">
                <h1 class="table-sec-title fw-bold display-5">
                    Blood Bank's Blood Stocks
                </h1>

                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    
                                    <th class="th-sm">A +
                                    </th>
                                    <th class="th-sm">A -
                                    </th>
                                    <th class="th-sm">B +
                                    </th>
                                    <th class="th-sm">B -
                                    </th>
                                    <th class="th-sm">AB +
                                    </th>
                                    <th class="th-sm">AB -
                                    </th>
                                    <th class="th-sm">0 +
                                    </th>
                                    <th class="th-sm">0 -
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123</td>
                                    <td>45</td>
                                    <td>244</td>
                                    <td>67</td>
                                    <td>98</td>
                                    <td>136</td>
                                    <td>48</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
    </section>


<script>
        function openTab(evt, TabName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(TabName).style.display = "block";
          evt.currentTarget.className += " active";
        }



        function myFunction1() {
          var x = document.getElementById("myTopnav1");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
        }
        </script>
<?php include "footer.php"; 
?>