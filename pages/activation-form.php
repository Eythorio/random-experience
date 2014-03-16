<script type="text/javascript">

function SubmitCode1() {
    var code = $("#code1").val();
    $.post("pages/activation-city.php", { code: code },
    function(data) {
        //alert("Data Loaded: " + data);

        var div = document.getElementById('sub-content-wrapper');

        div.innerHTML = data;
    });
}
</script>

<h1>Activate Your Code: </h1>
<form action="index.php" class='' method="post">
<h4>Activation Code:</h4>
<span class='nowrap'><input name='code' id='code1' type="text">
<input type="button" id="activate-button" onClick="SubmitCode1();"  value="GO!" /></span>
</form>