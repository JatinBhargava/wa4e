   print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<p>Please enter a two-leter key for encoding.</p>
<p>Please enter a two-letter key for encoding.</p>
<form>
<input type="text" name="code" value="<?= htmlentities($code) ?>"/>
<input type="submit" value="Compute MD5 for CODE"/>
