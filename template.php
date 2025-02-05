<?php
$num = 777;
$date = '01 декабря 2077 г.';
$products = array(
	array(
		'NAME' => 'Товар_1',
		'NO' => '2321232',
		'QUANTITY' => 2,
		'PRICE' => '8 769,44'
	),
	array(
		'NAME' => 'Товар_2',
		'NO' => '14232',
		'QUANTITY' => 1,
		'PRICE' => '28 769,44'
	),
);
?>
<div id="invoice-template">
	<table style="font-size: 10pt; font-family: Arial">
		<table width="100%">
			<tr>
				<td
					style="
	          width: 68%;
	          padding: 0 0 10px;
	          text-align: justify;
	          font-size: 6pt;
	        ">
					Внимание! Оплата данного счета означает согласие с условиями поставки
					товара. Счет действителен в течение 5(пяти) банковских дней, не считая
					дня выписки счета. Уведомление об оплате обязательно, в противном случае
					НЕ ГАРАНТИРУЕТСЯ наличие товара на складе. Товар отпускается по факту
					прихода денег на р/с Поставщика, самовывозом, при наличии доверенности и
					паспорта.
				</td>
				<td style="width: 32%; text-align: center; padding: 0 0 10px">

				</td>
			</tr>
		</table>

		<table
			width="100%"
			border="1"
			style="border-collapse: collapse; width: 100%; font-size: 10pt"
			cellpadding="2"
			cellspacing="2">
			<tr>
				<td colspan="2" rowspan="2" style="min-height: 13mm">
					<table
						width="100%"
						border="0"
						cellpadding="0"
						cellspacing="0"
						style="height: 13mm">
						<tr>
							<td valign="top" style="font-size: 10pt">
								Ф-Л "СЕВЕРНАЯ СТОЛИЦА" АО "РАЙФФАЙЗЕНБАНК" г. Санкт-Петербург
							</td>
						</tr>
						<tr>
							<td valign="bottom" style="height: 3mm; font-size: 9pt">
								Банк получателя
							</td>
						</tr>
					</table>
				</td>
				<td style="min-height: 7mm; height: auto; width: 25mm; font-size: 9pt">
					БИK
				</td>
				<td rowspan="2" style="width: 60mm">
					<table
						width="100%"
						border="0"
						cellpadding="0"
						cellspacing="0"
						style="font-size: 9pt; height: 13mm">
						<tr>
							<td style="min-height: 7mm; height: auto; width: 25mm">
								044030723
							</td>
						</tr>
						<tr>
							<td style="min-height: 7mm; height: auto; width: 25mm">
								30101810100000000723
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="width: 25mm; font-size: 9pt">Сч. №</td>
			</tr>
			<tr>
				<td style="min-height: 6mm; height: auto; width: 50mm">ИНН 7816189554</td>
				<td style="min-height: 6mm; height: auto; width: 55mm">КПП 781101001</td>
				<td
					rowspan="2"
					style="min-height: 19mm; height: auto; vertical-align: top; width: 25mm">
					Сч. №
				</td>
				<td
					rowspan="2"
					style="min-height: 19mm; height: auto; vertical-align: top; width: 60mm">
					40702810603000079889
				</td>
			</tr>
			<tr>
				<td colspan="2" style="min-height: 13mm; height: auto">
					<table
						border="0"
						cellpadding="0"
						cellspacing="0"
						style="height: 13mm; font-size: 9pt">
						<tr>
							<td valign="top" style="font-size: 10pt">
								Общество с ограниченной ответственностью Торговый Дом "АВТОграф"
							</td>
						</tr>
						<tr>
							<td valign="bottom" style="height: 3mm; font-size: 9pt">
								Получатель
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<table style="margin-top: 10px">
			<tr
				style="
	        font-weight: bold;
	        font-size: 14pt;
	        padding-left: 5px;
	        padding-top: 10px;
	      ">
				<td>Счет <?= $num ?> от <?= $date ?></td>
			</tr>
		</table>

		<table
			width="100%"
			style="background-color: #000000; font-size: 1px; padding-top: 2px"></table>

		<table width="100%" style="font-size: 9pt">
			<tr>
				<td style="width: 30mm; vertical-align: top">Поставщик:</td>
				<td>
					<b>
						Общество с ограниченной ответственностью Торговый Дом "АВТОграф", ИНН
						7816189554, КПП 781101001, 192019, Санкт-Петербург г, Седова ул, дом
						11, литера Б, помещение 19-Н, тел.: (812) 334-39-96
					</b>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td style="width: 30mm; vertical-align: top">Покупатель:</td>
				<td>
					<b>
						ИП Илон Масков , ИНН 660000000000, 90210, Лос-Анджелес, Беверли-Хилз,
						спросить Илона
					</b>
				</td>
			</tr>
		</table>

		<table
			border="2"
			width="100%"
			cellpadding="2"
			cellspacing="2"
			style="
	      border-collapse: collapse;
	      width: 100%;
	      font-size: 10pt;
	      margin: 10px 0;
	    ">
			<thead>
				<tr>
					<th style="width: 13mm">№</th>
					<th style="width: 27mm">Артикул</th>
					<th>Товары (работы, услуги)</th>
					<th style="width: 20mm">Кол-во</th>
					<th style="width: 17mm">Ед.</th>
					<th style="width: 35mm">Цена</th>
					<th style="width: 35mm">Сумма</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $item): ?>
					<tr>
						<td style="width: 13mm; text-align: center"></td>
						<td style="width: 27mm; text-align: center"><?= $item['NO'] ?></td>
						<td><?= $item['NAME'] ?></td>
						<td style="width: 20mm; text-align: center"><?= $item['QUANTITY'] ?></td>
						<td style="width: 17mm; text-align: center">Шт.</td>
						<td style="width: 35mm; text-align: center"><?= $item['PRICE'] ?></td>
						<td style="width: 35mm; text-align: center">Сумма</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<table
			border="0"
			width="100%"
			cellpadding="1"
			cellspacing="1"
			style="font-size: 10pt; padding-top: 5px">
			<tr>
				<td></td>
				<td style="width: 27mm; font-weight: bold; text-align: right">Итого:</td>
				<td style="width: 35mm; font-weight: bold; text-align: center">0.00</td>
			</tr>
			<tr>
				<td></td>
				<td style="width: 27mm; font-weight: bold; text-align: right">
					В т.ч. НДС (20%):
				</td>
				<td style="width: 35mm; font-weight: bold; text-align: center">0.00</td>
			</tr>
			<tr>
				<td></td>
				<td style="width: 37mm; font-weight: bold; text-align: right">
					Итого с НДС:
				</td>
				<td style="width: 35mm; font-weight: bold; text-align: center">0.00</td>
			</tr>
		</table>

		<table border="0" width="100%" style="font-size: 10pt; margin-bottom: 10px">
			<tr>
				<td>Всего наименований 0 на сумму 0.00 рублей.</td>
			</tr>
			<tr>
				<td><b>Ноль рублей 00 копеек</b></td>
			</tr>
		</table>

		<table
			border="0"
			style="
	      background-color: #000000;
	      width: 100%;
	      font-size: 1px;
	      padding-top: 2px;
	    "></table>

		<table
			width="100%"
			style="border-collapse: collapse; width: 100%; font-size: 10pt; margin-top: 10px"
			cellpadding="2"
			cellspacing="2">
			<tr>
				<td style="width: 20mm"><b>Руководител</b>ь</td>
				<td style="width: 30mm; border-bottom: 1px solid #000"></td>
				<td>Громов И.С.</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td style="width: 20mm"><b>Бухгалтер</b></td>
				<td style="width: 30mm; border-bottom: 1px solid #000"></td>
				<td>Майорова С. Р.</td>
			</tr>
		</table>
	</table>
</div>
