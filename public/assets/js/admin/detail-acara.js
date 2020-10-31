//mendefinisikan datatable
$('.datatable-table').DataTable();

//menyembunyikan tabel edit
$("#edit-table-container").hide();

//ketika tombol edit di klik.
$(document).on("click",".not-editing",function(){
	//mengganti tabel yang dapat dilihat user ke tabel edit
	$("#edit-table-container").show();
	$("#read-table-container").hide();

	//mengubah style dari button edit
	$("#edit-btn").removeClass("btn-warning");
	$("#edit-btn").removeClass("text-dark");
	$("#edit-btn").addClass("btn-success");
	$("#edit-btn").addClass("text-light");
	$("#edit-btn").html('<i class="fa fa-save mr-2"></i> SELESAI');

	//menandakan bahwa sedang dilakukan edit
	$("#edit-btn").addClass("editing");
	$("#edit-btn").removeClass("not-editing");
});

//ketika tombol selesai di klik.
$(document).on("click",".editing",function(){
	//mengganti tabel yang dapat dilihat user ke tabel read
	$("#edit-table-container").hide();
	$("#read-table-container").show();

	//mengubah style dari button selesai ke button edit awal
	$("#edit-btn").addClass("btn-warning");
	$("#edit-btn").addClass("text-dark");
	$("#edit-btn").removeClass("btn-success");
	$("#edit-btn").removeClass("text-light");
	$("#edit-btn").html('<i class="fas fa-pen mr-2"></i> EDIT');

	//menandakan bahwa edit selesai
	$("#edit-btn").removeClass("editing");
	$("#edit-btn").addClass("not-editing");
});