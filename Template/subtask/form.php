<?php   
	echo "<br /><br />";
	echo $this->form->label(t('sttextfieldlabel'), 'sttextfieldlabel');
	echo $this->form->texteditor('sttextfield',$values, $errors); 
?>
