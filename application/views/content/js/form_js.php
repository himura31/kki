<script type="text/javascript">
	$(document).ready(function() {	
	});

	$(document).on('click', '#btn-managerial', function(event) {
		event.preventDefault();
		var tes = 0;
		var id = parseInt(<?=$_GET['id']?>);
		// DATA
		   let manager_persen1 	= $("#mngr_persen1").val();
		   let manager_persen2 	= $("#mngr_persen2").val();
		   let manager_persen3 	= $("#mngr_persen3").val();
		   let manager_persen4 	= $("#mngr_persen4").val();
		   let manager_persen5 	= $("#mngr_persen5").val();
		   let manager_persen6 	= $("#mngr_persen6").val();

		   let manager_score1 	= $("#mngr_score1").val();
		   let manager_score2 	= $("#mngr_score2").val();
		   let manager_score3 	= $("#mngr_score3").val();
		   let manager_score4 	= $("#mngr_score4").val();
		   let manager_score5 	= $("#mngr_score5").val();
		   let manager_score6 	= $("#mngr_score6").val();

		   let manager_nilai1 	= $("#mngr_nilai1").val();
		   let manager_nilai2 	= $("#mngr_nilai2").val();
		   let manager_nilai3 	= $("#mngr_nilai3").val();
		   let manager_nilai4 	= $("#mngr_nilai4").val();
		   let manager_nilai5 	= $("#mngr_nilai5").val();
		   let manager_nilai6 	= $("#mngr_nilai6").val();

		   let id_detail1 		= $("#id_detail1").val();
		   let id_detail2 		= $("#id_detail2").val();
		   let id_detail3 		= $("#id_detail3").val();
		   let id_detail4 		= $("#id_detail4").val();
		   let id_detail5 		= $("#id_detail5").val();
		   let id_detail6 		= $("#id_detail6").val();
		// DATA

		if (id > 0) {
	       	$.ajax({
	         	type : 'POST',
	       	 	url  : "<?php echo site_url('FormController/Create_manager') ?>",
	         	data :  {
					manager_nilai :{
						manager_nilai1,
						manager_nilai2,
						manager_nilai3,
						manager_nilai4,
						manager_nilai5,
						manager_nilai6
					},
					id_detail :{
						id_detail1,
						id_detail2,
						id_detail3,
						id_detail4,
						id_detail5,
						id_detail6
					},
					id : id
				},
	         	success : function(data){
		         	console.log(data);
		         	alert('Data Tersimpan');
		         	$("#btn-managerial").hide();
		        }
	     	})
		}
		else{
			$.ajax({
	         	type : 'POST',
	       	 	url  : "<?php echo site_url('FormController/Create_manager') ?>",
	         	data :  {
					manager_persen : {
						manager_persen1,
						manager_persen2,
						manager_persen3,
						manager_persen4,
						manager_persen5,
						manager_persen6
					},
					manager_score :{
						manager_score1,
						manager_score2,
						manager_score3,
						manager_score4,
						manager_score5,
						manager_score6
					},
					id : id
				},
	         	success : function(data){
		         	console.log(data);
		         	alert('Data Tersimpan');
		         	$("#btn-managerial").hide();
		        }
	     	})
		}
	});

	$(document).on('click', '#btn-personal', function(event) {
	       event.preventDefault();
	       var tes = 0;
	       let personal_persen1 = $("#prsn_persen1").val();
	       let personal_persen2 = $("#prsn_persen2").val();
	       let personal_persen3 = $("#prsn_persen3").val();
	       let personal_persen4 = $("#prsn_persen4").val();
	       let personal_persen5 = $("#prsn_persen5").val();
	       let personal_persen6 = $("#prsn_persen6").val();

	       let personal_score1 = $("#prsn_score1").val();
	       let personal_score2 = $("#prsn_score2").val();
	       let personal_score3 = $("#prsn_score3").val();
	       let personal_score4 = $("#prsn_score4").val();
	       let personal_score5 = $("#prsn_score5").val();
	       let personal_score6 = $("#prsn_score6").val();

	       $.ajax({
	         type : 'POST',
	       	 url  : "<?php echo site_url('FormController/Create_personal') ?>",
	         data :  {personal_persen : {personal_persen1 , personal_persen2 , personal_persen3 , personal_persen4 , personal_persen5 , personal_persen6 }, personal_score :{ personal_score1 : personal_score1 , personal_score2 : personal_score2 , personal_score3 : personal_score3 , personal_score4 : personal_score4 , personal_score5 : personal_score5 , personal_score6 : personal_score6 }} ,
	         success : function(data){
	         	console.log(data);
	         	alert('Data Tersimpan');
	         	$("#btn-personal").hide();
	         }
	     })
	});

	$(document).on('click', '#btn-absense', function(event) {
	       event.preventDefault();
	       var tes = 0;
	       let absense_persen1 = $("#absense_persen1").val();

	       $.ajax({
	         type : 'POST',
	       	 url  : "<?php echo site_url('FormController/Create_absense') ?>",
	         data :  {absense_persen : absense_persen1} ,
	         success : function(data){
	         	console.log(data);
	         	alert('Data Tersimpan');
	         	$("#btn-absense").hide();
	         }
	     })
	});

	$(document).on('click', '#btn-corporate', function(event) {
	       event.preventDefault();
	       alert('tes');
	       
	       let corporate_persen1 = $("#crpt_persen1").val();
	       let corporate_persen2 = $("#crpt_persen2").val();
	       let corporate_persen3 = $("#crpt_persen3").val();
	       let corporate_persen4 = $("#crpt_persen4").val();

	       $.ajax({
	         type : 'POST',
	       	 url  : "<?php echo site_url('FormController/Create_corporate') ?>",
	         data :  {corporate_nilai : {corporate_persen1 , corporate_persen2 , corporate_persen3 , corporate_persen4 }} ,
	         success : function(data){
	         	console.log(data);
	         	alert('Data Tersimpan');
	         	$("#btn-corporate").hide();
	         }
	     })
	});

	function tambah_baris(){ 
	   	var objek    = $("#objek").val();
	   	var key  = $("#key").val();
	   	var weight    = $("#weight").val();
	   	var target_persen    = $("#target_persen").val();
	   	var target_waktu  = $("#target_waktu").val();
	   	var track    = $("#track").val();
	   	var actual_persen  = $("#actual_persen").val();
	   	var actual_bobot    = $("#actual_bobot").val();
	   	var problem    = $("#problem").val();
	   	var solusi  = $("#solusi").val();
	   	var button = "<input type='checkbox' name='record'>";
	   	var brs    = 
	   		"<tr>" +
					"<td width='207px'>" + objek    + "</td>" +
                "<td width='207px'>" + key  + "</td>" +
			    "<td width='207px'>" + weight    + "</td>" +
			    "<td width='80px'>" + target_persen    + "</td>" +
			    "<td width='80px'>" + target_waktu  + "</td>" +
			    "<td width='207px'>" + track  + "</td>" +
			    "<td width='80px'>" + actual_persen  + "</td>" +
			    "<td width='80px'>" + actual_bobot  + "</td>" +
			    "<td >" + problem  + "</td>" +
			    "<td >" + solusi  + "</td>" +
		    "</tr>";
		$("#table_baris").append(brs);
	}

	$("#tambah").click(function(){	
		tambah_baris();
	})

	// $(document).on('submit', '#form_middle', function(event) {
	    // var tes = $("#prsn_persen").val();
		// alert(tes);
       	// event.preventDefault();
	    // let formData = new FormData(this);
        // $.ajax({
	        // url  : "<?php echo site_url('FormController/Create') ?>",
	        // type : 'POST',
	        // dataType: 'json',
	        // data :  formData ,
	        // cache:false,
	        // processData: false,
	        // contentType: false,
	    // })
        // .done(function(data){
	        // console(data);
	    // })
	// });

	// $(document).on('submit', '#form_staff', function(event) {
       	// event.preventDefault();
       	// let formData = new FormData(this);
        // $.ajax({
	        // url  : "<?php echo site_url('FormController/Create') ?>",
	        // type : 'POST',
	        // dataType: 'json',
	        // data :  formData ,
	        // cache:false,
	        // processData: false,
	        // contentType: false,
	    // })
        // .done(function(data){
            // console(data);
	    // })
	// });
</script>