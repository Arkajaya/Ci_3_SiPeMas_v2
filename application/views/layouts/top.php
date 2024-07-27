<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SiPemas | <?= $title; ?></title>
	<script src="//unpkg.com/alpinejs" defer></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Inter&family=Open+Sans&display=swap"
		rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('application/views/css/style.css'); ?>" type="text/css">
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						'inter': 'Inter',
						'aladin': 'Aladin',
						'opensans': 'Open+Sans',
					},
				}
			}
		}

	</script>
</head>
