/**
 * @param {string} button - id кнопки
 * @param {string} template - id темпплейта
 */
let generateInvoicePDF = (button, template) => {
	const $button = document.getElementById(button);

	let init = () => {
		if (!$button) return;

		let options = {
			margin:       10,
			filename:     'invoice.pdf',
			image:        { type: 'jpeg', quality: 0.98 },
			html2canvas:  { scale: 2 },
			jsPDF:        { unit: 'mm', format: 'letter', orientation: 'portrait' }
		}

		const $template = document.getElementById(template);

		$button.addEventListener('click', () => {
			html2pdf().set(options).from($template).save();
		})
	}

	init();
}

generateInvoicePDF('invoice-button', 'invoice-template');
