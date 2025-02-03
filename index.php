<?php

declare(strict_types=1);

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
