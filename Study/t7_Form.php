<html>
	<head>
		<title>폼</title>
	</head>
	<body>
		<form>
			<fieldset>
				<legend>
					상세정보:
				</legend>
				
				<label>이름:</label>
				<input type="text" name="name" size="30" maxlength="100" />
				<br />
				<label>이메일:</label>
				<input type="email" name="email" size="30" maxlength="100"  />
			</fieldset>
		</form>
		
		<form>
			<fieldset>
				<legend>
					리뷰:
				</legend>
				<p>
					<label for="hear-about">사이트를 알게 된 경위는?</label>
					<select name="referrer" id="hear-about">
						<option value="google">구글</option>
						<option value="friend">친구</option>
						<option value="ad">광고</option>
						<option value="other">기타</option>
					</select>
					
				</p>
				
				<p>
					다시 방문하시겠습니까>
					<br />
					<label>
						<input type="radio" name="rating" value="yes" />
						네
					</label>
					<label>
						<input type="radio" name="rating" value="no" />
						아니요
					</label>
					<label>
						<input type="radio" name="rating" value="maybe" />
						잘 모르겠음
					</label>
				</p>
				
				<p>
					<label for="comments">의견:</label>
					<br />
					<textarea rows="4" cols="40" id="comments">
					</textarea>
				</p>
				
				<p>
					<lable>
					<input type="checkbox" name="subscribe" checked="checked" />
					이메일 업데이트에 가입
					</lable>
				</p>
				
				
				<input type="submit">
			</fieldset>
		</form>
	</body>
</html>
<!--

-->