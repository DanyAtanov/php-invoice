<?php

declare(strict_types=1); ?>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- use xlsx.mini.min.js from version 0.20.3 -->
	<script lang="javascript" src="https://cdn.sheetjs.com/xlsx-0.20.3/package/dist/xlsx.mini.min.js"></script>
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

<button id="sheetjsexport"><b>Export as XLSX</b></button>

<script>
document.getElementById("sheetjsexport").addEventListener('click', function() {
  /* Create worksheet from HTML DOM TABLE */
  var wb = XLSX.utils.table_to_book(document.getElementById("TableToExport"));
  /* Export to file (start a download) */
  XLSX.writeFile(wb, "SheetJSTable.xlsx");
});
</script>
</body>

</html>
