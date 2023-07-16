<!-- header -->

<?php
include "views/header.php";

$_SESSION['userid'] = 2;
?>


<main class="container-xxl">

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 order-2 order-sm-1">
                    <h2 class="fw-bold display-4">Donate Blood :<span class="text-primary"> Save Life </span></h2>
                    <p>Lorem ipsum Iusto numquam eum suscipit reiciendis sed ex ratione animi, et aperiam perspiciatis quaerat quibusdam! Minus, ab?</p>
                    <a href="#" class="btn btn-danger"> Donate</a>
                    <a href="#" class="btn btn-light btn-outline-danger"> Request</a>
                </div>
                <div class="col-sm-6 order-1 order-sm-2">
                    <img style="border-radius: 5%; object-fit: cover; height :100%; width : 100%;" src=" https://cdn.romania-insider.com/sites/default/files/styles/article_large_image/public/2022-03/blood_donation_help_-_photo_korn_vitthayanukarun_dreamstime.com_.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="table-section">
        <h2 class="table-sec-title fw-bold display-5">Available Donors</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>
        <div style="overflow-x:auto;">
            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Position
                        </th>
                        <th class="th-sm">Office
                        </th>
                        <th class="th-sm">Age
                        </th>
                        <th class="th-sm">Start date
                        </th>
                        <th class="th-sm">Salary
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>

                    <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                    </tr>
                    <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name
                        </th>
                        <th>Position
                        </th>
                        <th>Office
                        </th>
                        <th>Age
                        </th>
                        <th>Start date
                        </th>
                        <th>Salary
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>






</main>



<!-- body end -->

<!-- footer -->

<?php include "views/footer.php"; ?>

<!-- footer end -->