<?php
    include 'global/header.php';
?>
<style>
html body {
    width: 100%;
    height: 100%;
    padding: 0px;
    margin: 0px;
    overflow: hidden;
}

#frame {
    width: 100%;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
var calcHeight = function() {
    $('#frame').height($(window).height());
}

$(document).ready(function() {
    calcHeight();
});

$(window).resize(function() {
    calcHeight();
}).load(function() {
    calcHeight();
});
</script>

<iframe id="frame" src="http://202.5.52.152:8081/" name="frame" frameborder="0" noresize="noresize"
    style="height: 902px;">
</iframe>

<?php
    include 'footer.php';
?>