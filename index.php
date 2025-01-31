<?php

/* Строгая типипзация */

declare(strict_types=1);

interface Template
{
	public function get();
}

class InvoiceTemplate implements Template
{
	public function get()
	{
		return 'template';
	}
}

class InvoiceTemplate2 implements Template
{
	public function get()
	{
		return 'template';
	}
}

class Generator
{
	public function generate(Template $template)
	{
		return $template->get();
	}
}


$g1 = new Generator();
$g1->generate(new InvoiceTemplate());

$g2 = new Generator();
$g2->generate(new InvoiceTemplate2());
