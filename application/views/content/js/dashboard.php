<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#btn-pw-save").click(function(){
			var pw1 = $("#pw1").val();
			var pw2 = $("#pw2").val();
			if (pw1 != pw2){
				toastr.info('Konfirmasi sandi salah, silakan coba lagi', 'Notifikasi', 
	            {
	                timeOut: 40000,
	                closeButton: true,
	                showMethod: "slideDown",
	                hideMethod: "slideUp",
	                positionClass: "toast-bottom-left"
	            });
			}
			else {
				$("#form-change-pw").submit();
			}
		});
	})

function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
}
//-->
</script>