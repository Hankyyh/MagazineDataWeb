<h2>My magazines</h2>
<?php
$this->table->set_heading('Publication', 'Issue', 'Date','Cocer','Actions');
echo $this->table->generate($magazines);