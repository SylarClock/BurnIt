

$("#backCover").on("change", function(){
	debugger;
	var file = this.files[0];
	var reader = new FileReader();
	reader.onloadend = function(){
		$("#bckg_1").css('background-image', 'url("' + reader.result + '")');
		$("#bckg_2").css('background-image', 'url("' + reader.result + '")');
	}
	if(file){
		reader.readAsDataURL(file);
	}else{

	}
});

function readFile(input,img){
	if(input.files && input.files[0]){
		var reader = new FileReader();

		reader.onload = function(e){
			img.attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#imgFile1").on("change", function(){
	readFile(this, $("#img_1"));
});
$("#imgFile2").on("change", function(){
	readFile(this, $("#img_2"));
});
$("#imgFile3").on("change", function(){
	readFile(this, $("#img_3"));
});

$("#publicar").click(function(){

		debugger;
		var title = $("#Titulo").val();
		var bloq1 = $("#bloqTxt1").val();
		var file1 = $("#imgFile1").val();
		
		var bloq1 = $("#bloqTxt2").val();
		var file1 = $("#imgFile2").val();

		var bloq1 = $("#bloqTxt3").val();
		var file1 = $("#imgFile3").val();

		var cal = $("#calif").val();
		var desc = $("#descrip").val();

		var bckg_h1 = $("#bckg_1");
		var bckg_h2 = $("#bckg_2");



});