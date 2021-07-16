<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Check if POST variable "title" exists, if not default the value to blank, basically the same for all variables
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;
    // Insert new record into the "polls" table
    $stmt = $pdo->prepare('INSERT INTO polls (title, description, image) VALUES (?, ?, ?)');
    $stmt->execute([ $title, $description, $filename ]);
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";}
    // Below will get the last insert ID, this will be the poll id
    $poll_id = $pdo->lastInsertId();
    // Get the answers and convert the multiline string to an array, so we can add each answer to the "poll_answers" table
    $answers = isset($_POST['answers']) ? explode(PHP_EOL, $_POST['answers']) : '';
    foreach($answers as $answer) {
        // If the answer is empty there is no need to insert
        if (empty($answer)) continue;
        // Add answer to the "poll_answers" table
        $stmt = $pdo->prepare('INSERT INTO poll_answers (poll_id, title, image) VALUES (?, ?, ?)');
        $stmt->execute([ $poll_id, $answer, $filename]);

    }
    // Output message
    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create Poll')?>

<div class="content update">
	<h2>Create Poll</h2>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div id="readroot"  class="row">
        <input type="button" value="Remove review" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" /><br /><br />
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
            <label for="description">Description</label>
            <textarea name="answers" id="answers" placeholder="Description" required></textarea>
            <label for="image">Insert Image</label>
            <input type="file" name="uploadfile" value="" />
        </div>
        <span id="writeroot"></span>
        <input type="button"  value="Add Field" onclick="moreFields()"/>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<script>
var counter = 0;

function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}
</script>
<?=template_footer()?>