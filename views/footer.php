<!-- Footer -->
<footer class=" text-center text-white" style="background-color:#262626; height:min-content">

    <div class="container p-4">







        <div class="row">

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Public Pages</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="<?= HOSTNAME ?>" class="text-white">Home</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>donorlist" class="text-white">Donors List</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>bloodbanks" class="text-white">Bloodbank List</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>events" class="text-white">Events</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Forms</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="<?= HOSTNAME ?>addbloodbank" class="text-white">Blood Bank Request</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>bloodrequest" class="text-white">Request Blood</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>



            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Dash Panels</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="<?= HOSTNAME ?>bbadmin" class="text-white">BB Admin</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>admin" class="text-white">Admin</a>
                    </li>
                    <li>
                        <a href="<?= HOSTNAME ?>dash" class="text-white">User Dash</a>
                    </li>

                </ul>
            </div>



            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>

        </div>



    </div>


</footer>
<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/db9243b83f.js" crossorigin="anonymous"></script>
<script src="<?= HOSTNAME ?>assets/js/app.js"></script>
<script>
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        // alert(maxDate);
        $('#inputdate').attr('min', maxDate);
    });
</script>

</body>

</html>