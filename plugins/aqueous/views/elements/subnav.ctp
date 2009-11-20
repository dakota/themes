<ul id="subnav">
	<li>Subnav:</li>
	<li><?php echo $html->link(
			'<em>N</em>on-themed',
			array('theme'=>false, 'layout'=>$this->passedArgs['layout']),
			array(
				'class' => $this->passedArgs['theme']==false?'active':'',
				'escape' => false));
		?></li>
	<li><?php echo $html->link(
			'<em>D</em>ark theme',
			array('theme'=>'dark', 'layout'=>$this->passedArgs['layout']),
			array(
				'class' => $this->passedArgs['theme']=='dark'?'active':'',
				'escape' => false));
		?></li>
	<li><a href=""><em>I</em>ntro</a></li>
	<li><a href=""><em>A</em>bout</a></li>
	<li><a href=""><em>E</em>xamples</a></li>
	<li><a href=""><em>C</em>ontact</a></li>
</ul>
