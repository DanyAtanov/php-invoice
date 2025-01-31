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
		return require('./template.php');
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
