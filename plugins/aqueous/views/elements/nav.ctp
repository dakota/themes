<ul id="nav">
	<li>
		<?php echo $html->link(
			'<em>D</em>efault',
			array('layout'=>'default', 'theme'=>$this->passedArgs['theme']),
			array(
				'class' => $this->passedArgs['layout']=='default'?'active':'',
				'escape' => false));
		?></li>
	<li>
		<?php echo $html->link(
			'<em>2</em> Columns',
			array('layout'=> 'two_columns', 'theme'=>$this->passedArgs['theme']),
			array(
				'class' => $this->passedArgs['layout']=='two_columns'?'active':'',
				'escape' => false));
		?>
	</li>
	<li><a href=""><em>I</em>ntro</a></li>
	<li><a href=""><em>A</em>bout</a></li>
	<li><a href=""><em>E</em>xamples</a></li>
	<li><a href=""><em>C</em>ontact</a></li>
</ul>