<?php

declare(strict_types=1); ?>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Template to PDF</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js">
	</script>
	<script defer src='/index.js'></script>
</head>

<body>
	<?php

	interface Template
	{
		public function get();
	}

	class InvoiceTemplate implements Template
	{
		public function get()
		{
			if (file_exists('./template.php')) {
				return require('./template.php');
			} else {
				echo 'Файл не найден';
			}
		}
	}

	class GenerateInvoice
	{
		public function generate(Template $template)
		{
			echo $template->get();
		}
	}


	$g1 = new GenerateInvoice();
	$g1->generate(new InvoiceTemplate());
	
	?>

<br>
<br>
<button id="invoice-button">Скачать счет</button>
</body>

</html>
