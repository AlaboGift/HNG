<?php 
session_start();
class alert {
	
	public function set($msg,$type){
		$_SESSION["alert"]= $msg;
		$_SESSION["alert_t"]= $type;
	}

	public function get($x=1){
		if(isset($_SESSION["alert"]) && $_SESSION["alert"]!=''):?>
 		<script>
 			$.notify({
				icon: 'fa fa-alarm',
				title: 'Alert',
				message: '<?=$_SESSION["alert"]?>',
			},{
				type: '<?=$_SESSION["alert_t"]?>',
				placement: {
					from: 'top',
					align: 'right'
				},
				time: 5000,
			});
		</script>
		
		<?php 
			$_SESSION["alert"]=""; 
			$_SESSION["alert_t"]=""; 
		endif;
	}
}

?>