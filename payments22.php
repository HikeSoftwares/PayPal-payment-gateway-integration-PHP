<?php

$dbConfig = [
	'host' => 'localhost',
	'username' => 'matchmeb_matchme',
	'password' => 'JICUq1mfzZ',
	'name' => 'matchmeb_matchmebabe'
];
$db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);
$data = [
		'item_name' => "Payment2222",
		'item_number' =>"1111",
		'payment_status' => "Pending",
		'payment_amount' => 12.00,
		'payment_currency' => USD,
		'txn_id' => "USDFG112223",
		'receiver_email' => 'rajandprabhat@gmail.com',
		'payer_email' => 'rajandprabhat@gmail.com',
		'custom' => 1233,
	];

$stmt = $db->prepare('INSERT INTO `payments` (txnid, userid, payment_amount, payment_status, itemid, createdtime) VALUES(?, ?, ?, ?, ?,?)');
$stmt->bind_param(
			'sidsss',
			$data['txn_id'],
            $data['custom'],
			$data['payment_amount'],
			$data['payment_status'],
			$data['item_number'],
			date('Y-m-d H:i:s')
		);
		$stmt->execute();
		$stmt->close();

		echo $db->insert_id;

?>
