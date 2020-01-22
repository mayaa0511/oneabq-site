			<link rel="stylesheet" href="/perch/addons/plugins/ui/oneabqhome.css">
			<script>
				$(window).on('Perch_Load_Plugins', function(){
					$.getScript('PERCH_LOGINPATH/core/editors/markitup/jquery.markitup.js', function(){
						$.getScript('PERCH_LOGINPATH/core/editors/markitup/config.js', function(){
							$.getScript('PERCH_LOGINPATH/core/editors/markitup/assets/perchassets.js');							
						});	
					});
				});
			</script>