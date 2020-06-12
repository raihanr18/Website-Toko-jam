<html>

	<head>
    
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="jquery.countdown.min.js"></script>
        
	</head>
    
	<body>
        
        <?php
			date_default_timezone_set('GMT');
			$currentTime = date('H:i:s');
			$currentDay = date('w');
			$delTimeStart = '00:00:00';
			$delTimeEnd = '14:30:00';
			if ($currentTime >= $delTimeStart && $currentTime < $delTimeEnd && $currentDay > 0 && $currentDay < 6){
				$css = 'display: block;';
			} else {
				$css = 'display: none;';
			}
		?>
        
        <div id="delcta" style="<?php echo $css ?>">
        	<p>Time left for Free Next Day Delivery: <span id="countdowntimer"></span></p>
        </div>
        
        <script type="text/javascript">
			$('#countdowntimer').countdown('<?php $date = strtotime("+1 day"); echo date('Y/m/d', $date); ?> 14:30:00').on('update.countdown', function(event) {
				var $this = $(this).html(event.strftime(''
					+ '%H Hours '
					+ '%M Minutes '
					+ '%S Seconds'
				));
			});
		</script>
    
	</body>
    
</html>