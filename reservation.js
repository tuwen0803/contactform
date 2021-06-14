
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<b>予約フォーム</b><br>
<form method="POST" action="">
1.カレンダーから日付を選択してください<br>
<input type="text" id="date_val"/><br>
<div id="datepicker"></div><br>
2.時間を選択してください<br>
	<select name="time">
	<option value=""> 選択してください</option>
	<option value="">9:00～10:00</option>
	<option value="">10:00～11:00</option>
	<option value="">11:00～12:00</option>
	<option value="">13:00～14:00</option>
	<option value="">14:00～15:00</option>
	<option value="">15:00～16:00</option>
	<option value="">16:00～17:00</option>
	<option value="">17:00～18:00</option>
	</select><br><br>
3.ご希望される弁護士を選択してください<br>
	<select name="lawyer">
	<option value=""> 選択してください</option>
	<option value="">松島</option>
	<option value="">小野</option>
	<option value="">草野</option>
	</select>
	<br><br>
	<input type="submit" value="予約する" class="submit">
</form>

<script>
$(function() {
	var dateFormat = 'yy年mm月dd日';
    $("#datepicker").datepicker({
        dateFormat: dateFormat,
        minDate: 0,
        onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
        }
    });
});
</script>