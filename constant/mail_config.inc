<?php
////////////////////////////////////////////////////////
//
// メール設定ファイル
// Modified by N.Yamashita
// 2019/07/07
//
////////////////////////////////////////////////////////

	$from1 = "violin@krea.jp";

	function sendmail($to, $from, $subject, $naiyo)
	{
		mb_internal_encoding('UTF-8');
		$head = 
			"From: ". $from. 
			"\r\nReply-To:". $from. 
			"\r\nX-Mailer: PHP".
			"\r\nContent-Type: text/plain; charset=iso-2022-jp";
		$naiyo = mb_convert_encoding($naiyo, "ISO-2022-JP");
		$subject = mb_encode_mimeheader($subject, 'ISO-2022-JP', 'B');
			
		$to_array = explode(",", $to);
		foreach ($to_array as $val) {
			mail($val, $subject, $naiyo, $head, "-f". $from);
		}
	}

	
?>