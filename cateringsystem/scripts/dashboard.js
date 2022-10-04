<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">

	function center_object_div(parent, element){
		var parentWidth = document.querySelector(parent).offsetWidth;
		var elementWidth = document.querySelector(element).offsetWidth;
		var newLeft = (parentWidth - elementWidth)/2;
		document.querySelector(element).style= "left: "+newLeft+" px;";
	}

	function setHeight(){
		var HEIGHT = window.innerHeight;

		var l = document.querySelector(".leftside");
		var r = document.querySelector(".rightside");

		l.style = "height: "+HEIGHT+"px";
		r.style = "height: "+HEIGHT+"px";
	}


	var wH = window.innerHeight;
	var wW = window.innerWidth;

	document.querySelector(".dash").style = "width: "+wW+"px";
	document.querySelector(".dash").style = "height: "+wH+"px";


	window.addEventListener("load", function(){
		center_object_div('.leftside', '#avatar');
		setHeight();
	})
	window.addEventListener("resize", function(){
		center_object_div('.leftside', '#avatar');
		setHeight();
	})


</script>

<script type="text/javascript">
	// alert($("#location"))
	var location = $("#location").val();
	$("#location").on("keyup",function() {
		alert("executed");
		$.ajax({
			"method":"post",
			"data" : {_location_ : location},
			"url":"functions.php",
			"success": function(result){
				$(".fetch").append("  <option value='"+result+"'>"+result+"<option>");
			}
		});
	});

</script>
