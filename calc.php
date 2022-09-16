

<form>
    <div class="mb-3">
        <label for="tension" class="form-label">Tension</label>
        <input type="number" class="form-control" id="tension" oninput="autocalc()" >
    </div>
	<div class="mb-3">
        <label for="intensite" class="form-label">Intensité</label>
        <input type="number" class="form-control" id="intensite" oninput="autocalc()" >
    </div>
    <hr>
 
 
    <h4>Total Price: <span id="c_puissance">0</span></h4> <br>
	<h4>Total Price: <span id="c_energie">0</span></h4>
</form>

<script>
    function autocalc() {
        var tention = document.getElementById("tension").value;
        var intensite = document.getElementById("intensite").value;
        var puissance = +tention + +intensite;
		var energie = +tention * +intensite;
        document.getElementById("c_puissance").innerHTML = puissance;
		document.getElementById("c_energie").innerHTML = energie;
         
    }
</script>