<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta charset="utf-8">
	<title>My simple web form</title>
</head>
<body>
	<form action="#" method="post">
		<h1>The main title of this form</h1>

		<p>The fields that been follow by symbol * are requireds.</p>

		<!--This is the first section, which contain personal and contact informations-->
		<section>
			<h2>This is the subtitle of this section</h2>
			<p>
				<label for="photo">Choose your photo</label><br>
				<input type="file" id="photo" name="photo" accept="image/*">
			</p>
			<p>
				<label for="name">Name:<span title="required">*</span></label>
				<input type="text" id="name" name="name" placeholder="Your first name" required>
			</p>
			<p>
				<label for="surname">Surname:<span title="required">*</span></label>
				<input type="text" id="surname" name="surname" placeholder="Your surname" required>
			</p>
			<p>
				<label for="mail">Email:</label>
				<input type="email" id="mail" name="mail" placeholder="Your better email contact">
			</p>
			<p>
				<label for="birth">Birth:<span title="required">*</span></label>
				<input type="date" id="birth" name="birth" required>
			</p>
			<fieldset>
				<legend>Gender:<span title="required">*</span></legend>
				<ul>
					<li>
						<label for="male">Male:</label>
						<input type="radio" id="male" name="gender" value="male" checked>
					</li>
					<li>
						<label for="female">Female:</label>
						<input type="radio" id="female" name="gender" value="female">
					</li>
				</ul>
			</fieldset>
		</section>

		<!--This is about professional informations-->
		<section>
			<h2>This is the subtitle of this section</h2>
			<p>
				<label for="repo_mail">Repository mail:</label>
				<input type="email" id="repo_mail" name="repo_mail" placeholder="Your repository email">
			</p>
			<p>
				<label for="college_course">College course:</label>
				<input type="text" id="college_course" name="college_course" placeholder="if you been does any">
				, in the
				<label for="college">college:</label>
				<input type="text" id="college" name="college" placeholder="if you attended one">
			</p>
			<fieldset>
				<legend>Hard skills:</legend>
				<ul>
					<li>
						<label for="php">PHP:</label>
						<input type="checkbox" id="php" name="hard_skills" value="php">
					</li>
					<li>
						<label for="javascript">Javascript:</label>
						<input type="checkbox" id="javascript" name="hard_skills" value="javascript">
					</li>
					<li>
						<label for="html">HTML:</label>
						<input type="checkbox" id="html" name="hard_skills" value="html">
					</li>
					<li>
						<label for="css">CSS:</label>
						<input type="checkbox" id="css" name="hard_skills" value="css">
					</li>
					<li>
						<label for="mysql">MySQL:</label>
						<input type="checkbox" id="mysql" name="hard_skills" value="mysql">
					</li>
				</ul>
			</fieldset>
			<p>
				<label for="soft_skills">Soft skills:</label><br>
				<textarea id="soft_skills" name="soft_skills" cols="100" rows="5" placeholder="List yours softs skills here!"></textarea>
			</p>
			<p>
				<label for="objectives">Objectives:</label><br>
				<textarea id="objectives" name="objectives" cols="100" rows="5" placeholder="What your objectives?"></textarea>
			</p>
		</section>
		<section>
			<p>
				<input type="submit" id="submit" value="Go!">
			</p>
		</section>
	</form>
</body>
</html>
<!--PERSONAL NOTES

	Some unused input types:
	image, number, tel, seach, hidden, button, range (need <output> and javascript for show and update the value in real time), <select> plus <option> (tags), datetime-local, month, time, week, color. Some of these input types could be constrained by way of "min", "max" and "step" attributes.

	#####

	Some useful tags:
	<select cols="" rows="" maxlength=""> // this could include "multiple" and "size" attibutes
	to choose multiple options
		<optgroup label=""> // this is optional
			<option> <your option here> </option>
		</optgroup>
	</select>


	<label for=""> <a label here> </label>
	< input id="" name="" list="<put the datalist's id here>" >
	<datalist id=""> // this show suggestions of search
		<option> <your option here> </option>
	</datalist>


	<label for="">
	<progress id="" max="" value=""> <optional fallback to elder browsers> </progress>


	<meter id="" min="" max="" value="" low="" high="" optimum=""> <optional fallback to elder browsers> </meter>
-->