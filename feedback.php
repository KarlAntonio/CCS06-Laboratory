<html>
<body>

<form action="thankyou.php" method="get">
Name: <input type="text" name="name!" /><br />
E-mail: <input type="text" name="email"><br />
Type: 
<select name="type">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Other</option>
</select>
<br />
Level of Satisfaction: 
<label for="satisfaction">Level of satisfaction (0 to 10):</label>
<input type="range" name="satisfaction" min="0" max="10"><br />
Feedback Message: <input type="text" name="feedback"><br />
<input type="submit">
</form>

</body>
</html>
