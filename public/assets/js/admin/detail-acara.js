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

//ketika button update di row diklik
$(document).on("click",".update-btn",function(){

    index = $(this).attr('id').substring(7);
    datamerged = {
    	'nim' : $("#nim-"+index+" input").val(),
    	'nama' : $("#nama-"+index+" input").val(),
    	'id_partisipasi' : $("select#partisipasi-"+index).val(),
    };
    url = APP_URL+"/update/"+id_acara;
    var notice = new PNotify();

    $.ajaxSetup({
	   beforeSend: function(){
	   		console.log("before send");
	   		notice.update({
			    text: "Updating...",
			    type: 'info',
			    icon: 'fa fa-spinner fa-spin',
			    hide: false,
			    buttons: {
			        closer: false,
			        sticker: false
			    },
			    shadow: false,
			    width: "170px"
			});
	   },
	   complete: function(){
	   	console.log("complete");
	   	notice.update({
            title: "Done!",
            text: "Update berhasil!",
            type:"success",
            hide: true,
            buttons: {
	            closer: true,
	            sticker: true
	        },
	        icon: 'fa fa-check',
	        shadow: true,
	        width: PNotify.prototype.options.width,
        });
	   }
	});

    $.post(url, { '_token' : token,'data' : datamerged }, function(results) {
        if(results){
            $("#read-table tbody tr td#nim-"+index).html(results.data.nim);
            $("#read-table tbody tr td#nama-"+index).html(results.data.nama);
            $("#read-table tbody tr td#partisipasi-"+index).html(results.data.partisipasi);
        }
    });

});

//update text di table read ketika partisipasi diganti
$(document).on("change","select.partisipasi",function(){
    index = $(this).attr('id').substring(12);
    $("#read-table tbody tr td#partisipasi-"+index).html($(this).html());
});