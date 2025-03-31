<?php $protocol = (isset($_SERVER['HTTPS'])) ? 'https' : 'http'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/lib/wow/wow.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/lib/easing/easing.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/lib/counterup/counterup.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/js/main.js"></script>