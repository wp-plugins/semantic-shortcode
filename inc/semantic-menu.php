<?php 
function fn_semantic_shortcode()
{
	?>
	<style type="text/css">.width1{width: 100px;display: inline-block;}
	.segment{margin-bottom: 20px;}</style>
	<div class="wrap">
	<div class="clear"></div>
	<div class="demo container">
	  <div class="example">
	    <h1 class="ui header block center align">Sematic Sortcode
	    </h1>
	    <div class="tab demo">
	      <div class="ui secondary menu">
	        <a data-tab="first" class="item">Element 1</a>
	        <a data-tab="second" class="item">Element 2</a>
	        <a data-tab="third" class="item">Collections</a>
	        <a data-tab="fourth" class="item">Modules</a>
	      </div>
	      <div data-tab="first" class="ui tab segment">
	        <div class="ui top attached tabular menu">
	          <a data-tab="first/a" class="item">Button</a>
	          <a data-tab="first/b" class="item">Divider</a>
	          <a data-tab="first/c" class="item">Flag</a>
	          <a data-tab="first/d" class="item">Header</a>
	          <a data-tab="first/e" class="item">Icon</a>
	        </div>
	        <div data-tab="first/a" class="ui bottom attached active tab segment">
	            <div class="ui segment">
	              <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/button.html'>Button</a> Shortcode</h4>
	              [ss_button title="" title2="" style="ui button" class="" size="" color="" link=""]
	              <h4 class="ui header">Description</h4>
	              <p><strong class="width1">title</strong> : Add title for button</p>
	              <p><strong class="width1">title2</strong> : Add title2 for animated button</p>
	              <p><strong class="width1">class</strong> : Add custom class</p>
	              <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i></p>
	              <p><strong class="width1"></strong> Standard ->ui button<br/>
	                <strong class="width1"></strong> Primary->ui primary button<br/>
	                <strong class="width1"></strong> Secondary->ui secondary button<br/>
	                <strong class="width1"></strong> Animated Horizontal->ui animated button<br/>
	                <strong class="width1"></strong> Animated Vertical->ui vertical animated button<br/>
	                <strong class="width1"></strong> Animated Fade->ui animated fade button</p>
	              <p><strong class="width1">size</strong> : Add size from one of them<i class="angle double right icon"></i> mini<i class="ellipsis vertical icon"></i> tiny<i class="ellipsis vertical icon"></i> small<i class="ellipsis vertical icon"></i> medium<i class="ellipsis vertical icon"></i> Large<i class="ellipsis vertical icon"></i> big<i class="ellipsis vertical icon"></i> huge<i class="ellipsis vertical icon"></i> massive</p>
	              <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	              <p><strong class="width1">link</strong> : Add link eg: http://google.com </p>
	            </div> 
	            <div class="ui segment">
	              <h4 class="ui header">Shortcode</h4>
	              [ss_button title="Test" title2="" style="ui button" class="" size="" color="" link=""]
	              <h4 class="ui header">Output</h4>
	              <div class="ui button   ">Test</div>
	            </div>     
	            <div class="ui segment">
	              <h4 class="ui header">Shortcode</h4>
	              [ss_button title="Title" title2="Test" style="ui animated fade button" class="" size="huge" color="orange" link=""]
	              <h4 class="ui header">Output</h4>
	              <div class="ui animated fade button  huge orange"><div class="visible content">Title</div><div class="hidden content">Test</div></div>
	            </div>  
	        </div>
	        <div data-tab="first/b" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/divider.html'>Divider</a> Shortcode</h4>
	            [ss_divider title="" style="ui divider" class=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">title</strong> : Add title for divider</p>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i></p>
	            <p><strong class="width1"></strong> Standard ->ui divider<br/>
	              <strong class="width1"></strong> Horizontal->ui horizontal divider<br/>
	              <strong class="width1"></strong> Vertical->ui vertical divider<br/></p>
	          </div>   
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_divider title="" style="ui divider" class=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui divider  "></div>
	          </div>  
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_divider title="OR" style="ui horizontal divider" class=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui horizontal divider  ">OR</div>
	          </div> 
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_divider title="AND" style="ui vertical divider" class=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui vertical divider  ">AND</div>
	          </div>   
	        </div>
	        <div data-tab="first/c" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/flag.html'>Flag</a> Shortcode</h4>
	            [ss_flag country="" class=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">country</strong> : Add country class eg: us flag <a href="http://semantic-ui.com/elements/flag.html#types" target="_blank">get more</a></p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_flag country="in flag" class=""]
	            <h4 class="ui header">Output</h4>
	            <i class=" in flag "></i>
	          </div> 
	        </div>
	        <div data-tab="first/d" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/header.html'>Header</a> Shortcode</h4>
	            [ss_header level="1" class="" title2="" title="" style="dividing" color=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">level</strong> : Add level from one of them<i class="angle double right icon"></i> 1<i class="ellipsis vertical icon"></i> 2<i class="ellipsis vertical icon"></i> 3<i class="ellipsis vertical icon"></i> 4<i class="ellipsis vertical icon"></i> 5<i class="ellipsis vertical icon"></i> 6</p>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">title</strong> : Add title for header</p>
	            <p><strong class="width1">title2</strong> : Add title2 for animated header</p>
	            <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i></p>
	            <p><strong class="width1"></strong> Dividing->dividing</br>
	               <strong class="width1"></strong> Block->block</br>
	               <strong class="width1"></strong> Attached->attached</br>
	                <strong class="width1"></strong> Left floated ->left floated </br>
	                <strong class="width1"></strong> Right floated->floated right</br>
	                 <strong class="width1"></strong> Right aligned->right aligned</br>
	                <strong class="width1"></strong> Left aligned->left aligned</br>
	                 <strong class="width1"></strong> Center aligned->center aligned</p>
	            <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_header level="4" class="" title2="" title="Send Title" style="center aligned" color="red" size="large"]
	            <h4 class="ui header">Output</h4>
	            <h1 class="ui header center aligned large red">Send Title<div class="sub header"></div></h1>
	          </div> 
	        </div>
	        <div data-tab="first/e" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/icon.html'>Icon</a> Shortcode</h4>
	            [ss_icon icon="" class="" color=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">icon</strong> : Add icon class eg: alarm icon <a href="http://semantic-ui.com/elements/icon.html#web-content" target="_blank">get more</a></p>
	            <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_icon icon="alarm icon" class="" color="purple"]
	            <h4 class="ui header">Output</h4>
	            <i class=" alarm icon purple"></i>
	          </div> 
	        </div>
	      </div>
	      <div data-tab="second" class="ui tab segment active">
	        <div class="ui top attached tabular menu">
	          <a data-tab="second/a" class="item">Image</a>
	          <a data-tab="second/b" class="item">Input</a>
	          <a data-tab="second/c" class="item">Label</a>
	          <a data-tab="second/d" class="item">List</a>
	          <a data-tab="second/e" class="item">Reveal</a>
	        </div>
	        <div data-tab="second/a" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/image.html'>Image</a> Shortcode</h4>
	            [ss_image align="" class="" link="" img="" style="" color="" size=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">align</strong> : Add vertical align from one of them<i class="angle double right icon"></i> top aligned<i class="ellipsis vertical icon"></i> middle aligned<i class="ellipsis vertical icon"></i> bottom aligned </p>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">link</strong> : Add link url</p>
	            <p><strong class="width1">img</strong> : Add image url</p>
	            <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i> hidden<i class="ellipsis vertical icon"></i> disabled<i class="ellipsis vertical icon"></i> avatar<i class="ellipsis vertical icon"></i> bordered<i class="ellipsis vertical icon"></i> rounded<i class="ellipsis vertical icon"></i> centered<i class="ellipsis vertical icon"></i> left floated<i class="ellipsis vertical icon"></i> right floated</p>
	            <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	             <p><strong class="width1">size</strong> : Add size from one of them<i class="angle double right icon"></i> mini<i class="ellipsis vertical icon"></i> tiny<i class="ellipsis vertical icon"></i> small<i class="ellipsis vertical icon"></i> medium<i class="ellipsis vertical icon"></i> Large<i class="ellipsis vertical icon"></i> big<i class="ellipsis vertical icon"></i> huge<i class="ellipsis vertical icon"></i> massive</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_image align="middle aligned" class="" link="" img="http://www.w3schools.com/images/w3php.gif" style="rounded" color="pink" size="small"]
	            <h4 class="ui header">Output</h4>
	            <img class="ui image responsive-img  rounded small middle aligned pink" src="http://www.w3schools.com/images/w3php.gif">
	          </div> 
	        </div>
	        <div data-tab="second/b" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/input.html'>Input</a> Shortcode</h4>
	            [ss_input type="" class="" label="" placeholder="" style="" variation="" size="" name="" id=""]
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">type</strong> : Add type from one of them<i class="angle double right icon"></i> text<i class="ellipsis vertical icon"></i> email<i class="ellipsis vertical icon"></i> submit<i class="ellipsis vertical icon"></i>  number<i class="ellipsis vertical icon"></i> reset</p>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">label</strong> : Add label or icon class eg<i class="angle double right icon"></i> search icon </p>
	            <p><strong class="width1">placeholder</strong> : Add placeholder </p>
	            <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i> loading<i class="ellipsis vertical icon"></i> left loading<i class="ellipsis vertical icon"></i> icon<i class="ellipsis vertical icon"></i> left icon<i class="ellipsis vertical icon"></i> labeled<i class="ellipsis vertical icon"></i> corner labeled<i class="ellipsis vertical icon"></i> right labeled<i class="ellipsis vertical icon"></i> action<i class="ellipsis vertical icon"></i> ui input</p>
	            <p><strong class="width1">variation</strong> : Add variation from one of them<i class="angle double right icon"></i> transparent<i class="ellipsis vertical icon"></i> inverted<i class="ellipsis vertical icon"></i> fluid icon<i class="ellipsis vertical icon"></i> fluid action<i class="ellipsis vertical icon"></i> focus<i class="ellipsis vertical icon"></i> error </p>
	            <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_input type="text" class="ss" label="search icon" placeholder="search " style="corner labeled" variation="focus" size="large" name="ss" id="ss"]
	            <h4 class="ui header">Output</h4>
	            <div class="ui input corner labeled ss large focus"><input placeholder="search " name="ss" id="ss" type="text"><div class="ui corner label"><i class="search icon"></i></div></div>
	          </div> 
	        </div>
	        <div data-tab="second/c" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/label.html'>Label</a> Shortcode</h4>
	            [ss_label icon="" class="" label="" img="" style="" sequence="" size="" attached="" color="" link=""]

	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">icon</strong> : Add icon class eg: search icon <a  target="_blank" href='http://semantic-ui.com/elements/icon.html'>get more</a></p>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">label</strong> : Add label to display</p>
	            <p><strong class="width1">img</strong> : Add image url to display</p>
	            <p><strong class="width1">style</strong> : Add style from one of them<i class="angle double right icon"></i> tag<i class="ellipsis vertical icon"></i> ribbon<i class="ellipsis vertical icon"></i> circular<i class="ellipsis vertical icon"></i> floating</p>
	            <p><strong class="width1">sequence</strong> : Add sequence for display from one of them<i class="angle double right icon"></i> s1 to s8 </p>
	            <p><strong class="width1"></strong> Label | Icon | Image->s1<br/>
	              <strong class="width1"></strong> Icon | Image | Label->s2<br/>
	              <strong class="width1"></strong> Image | Label | Icon->s3<br/>
	              <strong class="width1"></strong> Label | Image | Icon->s4<br/>
	              <strong class="width1"></strong> Image | Icon |Label->s5<br/>
	              <strong class="width1"></strong> Icon |Label | Image->s6<br/>
	              <strong class="width1"></strong> Icon | Label (image url is blank)->s7<br/>
	              <strong class="width1"></strong> Label | Icon (image url is blank)->s8</p>
	            <p><strong class="width1">size</strong> : Add size from one of them <i class="angle double right icon"></i> mini<i class="ellipsis vertical icon"></i> tiny<i class="ellipsis vertical icon"></i> small<i class="ellipsis vertical icon"></i> medium<i class="ellipsis vertical icon"></i> Large<i class="ellipsis vertical icon"></i> big<i class="ellipsis vertical icon"></i> huge<i class="ellipsis vertical icon"></i> massive</p>
	            <p><strong class="width1">attached</strong> : Add attached from one of them<i class="angle double right icon"></i> top attached<i class="ellipsis vertical icon"></i> bottom attached<i class="ellipsis vertical icon"></i> top right attached<i class="ellipsis vertical icon"></i> top left attached<i class="ellipsis vertical icon"></i> bottom left attached<i class="ellipsis vertical icon"></i> bottom right attached</p>
	            <p><strong class="width1">color</strong> : Add color from one of them<i class="angle double right icon"></i> black<i class="ellipsis vertical icon"></i> blue<i class="ellipsis vertical icon"></i> green<i class="ellipsis vertical icon"></i> orange<i class="ellipsis vertical icon"></i> pink<i class="ellipsis vertical icon"></i> purple<i class="ellipsis vertical icon"></i> red<i class="ellipsis vertical icon"></i> teal<i class="ellipsis vertical icon"></i> yellow</p>
	            <p><strong class="width1">link</strong> : Add link eg: http://google.com </p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_label icon="" class="" label="test" img="" style="ribbon" sequence="s8" size="medium" attached="" color="purple" link=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui label ribbon  medium  purple">test</div>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_label icon="search icon" class="" label="search" img="" style="tag" sequence="s8" size="huge" attached="" color="green" link="http://fb.com"]
	            <h4 class="ui header">Output</h4>
	            <a class="ui label tag  huge  green" href="http://fb.com">search<i class="search icon"></i></a>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_label icon=" search icon" class="" label="test" img="" style="" sequence="s7" size="" attached="bottom right attached" color="yellow" link=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui label    bottom right attached yellow"><i class=" search icon"></i>test</div>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	           [ss_label icon="search icon" class="" label="Text" img="http://www.w3schools.com/images/w3php.gif" style="" sequence="s5" size="small" attached="bottom left attached" color="blue" link=""]
	            <h4 class="ui header">Output</h4>
	            <div class="ui image label  small bottom left attached blue"><img src="http://www.w3schools.com/images/w3php.gif"><i class="search icon"></i>Text</div>
	          </div>
	        </div>
	        <div data-tab="second/d" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/list.html'>List</a> Shortcode</h4>
	            <p>[ss_list variations="" class="" type="" size=""]<br/>
	            [ss_list_item] add list item 1 content [/ss_list_item]<br/>
	            [ss_list_item] add list item 2 content [/ss_list_item]<br/>
	            [ss_list_item] add list item 3 content [/ss_list_item]<br/>
	            [/ss_list]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">size</strong> : Add size from one of them <i class="angle double right icon"></i> mini<i class="ellipsis vertical icon"></i> tiny<i class="ellipsis vertical icon"></i> small<i class="ellipsis vertical icon"></i> medium<i class="ellipsis vertical icon"></i> Large<i class="ellipsis vertical icon"></i> big<i class="ellipsis vertical icon"></i> huge<i class="ellipsis vertical icon"></i> massive</p>
	            <p><strong class="width1">variations</strong> : Add variations from one of them<i class="angle double right icon"></i> horizontal<i class="ellipsis vertical icon"></i> inverted<i class="ellipsis vertical icon"></i> selection<i class="ellipsis vertical icon"></i> animated<i class="ellipsis vertical icon"></i> relaxed<i class="ellipsis vertical icon"></i> divided<i class="ellipsis vertical icon"></i> celled</p>
	            <p><strong class="width1">type</strong> : Add type from one of them<i class="angle double right icon"></i> list<i class="ellipsis vertical icon"></i> bulleted<i class="ellipsis vertical icon"></i> ordered<i class="ellipsis vertical icon"></i> link</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	           [ss_list variations="animated" class="" type=" bulleted" size="small"][ss_list_item]add list item 1 content [/ss_list_item][ss_list_item]add list item 2 content [/ss_list_item][ss_list_item]add list item 3 content [/ss_list_item][/ss_list]
	            <h4 class="ui header">Output</h4>
	            <div class="ui list  animated small"><div class="item">add list item 1 content </div><div class="item">add list item 2 content </div><div class="item">add list item 3 content </div></div>
	          </div>
	        </div>
	        <div data-tab="second/e" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/elements/reveal.html'>Reveal</a> Shortcode</h4>
	            <p>[ss_reveal variations="" class="" type=""]<br/>
	              [ss_reveal_show]add show content [/ss_reveal_show]<br/>
	              [ss_reveal_hide]add hidden content [/ss_reveal_hide]<br/>
	              [/ss_reveal]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">variations</strong> : Add variations from one of them<i class="angle double right icon"></i> masked<i class="ellipsis vertical icon"></i> instant<i class="ellipsis vertical icon"></i> disabled</p>
	            <p><strong class="width1">type</strong> : Add type from one of them<i class="angle double right icon"></i> circular<i class="ellipsis vertical icon"></i> fade<i class="ellipsis vertical icon"></i> move<i class="ellipsis vertical icon"></i> move right<i class="ellipsis vertical icon"></i> move up<i class="ellipsis vertical icon"></i> move down<i class="ellipsis vertical icon"></i> circular rotate<i class="ellipsis vertical icon"></i> circular rotate left</p>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	           [ss_reveal variations="masked" class="" type="move up"][ss_reveal_show]&lt;img src="http://www.w3schools.com/images/w3php.gif"&gt; [/ss_reveal_show][ss_reveal_hide]&lt;img src="http://www.w3schools.com/images/w3php.gif"&gt; [/ss_reveal_hide][/ss_reveal]
	            <h4 class="ui header">Output</h4>
	           <div class="ui reveal  move up masked"><div class="visible content"><img src="http://www.w3schools.com/images/w3php.gif"> </div><div class="hidden content"><img src="http://www.w3schools.com/images/w3php.gif"> </div></div>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	           [ss_reveal variations="masked" class="" type="circular rotate left"][ss_reveal_show]&lt;img src="http://www.w3schools.com/images/w3php.gif"&gt; [/ss_reveal_show][ss_reveal_hide]&lt;img src="http://www.w3schools.com/images/w3php.gif"&gt; [/ss_reveal_hide][/ss_reveal]
	            <h4 class="ui header">Output</h4>
	           <div class="ui reveal circular rotate left masked"><div class="visible content"><img src="http://www.w3schools.com/images/w3php.gif"> </div><div class="hidden content"><img src="http://www.w3schools.com/images/w3php.gif"> </div></div>
	          </div>
	        </div>
	      </div>
	      <div data-tab="third" class="ui tab segment">
	        <div class="ui top attached tabular menu">
	          <a data-tab="third/a" class="item">Grid</a>
	          <a data-tab="third/b" class="item">Message</a>
	          <!-- <a data-tab="third/c" class="item">3C</a> -->
	        </div>
	        <div data-tab="third/a" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://www.semantic-ui.com/collections/grid.html'>Grid</a> Shortcode</h4>
	            <p>[ss_grid class=""]<br/>
	            [ss_col row="8"]add content here.. [/ss_col]<br/>
	            [ss_col row="8"]add content here.. [/ss_col]<br/>
	            [/ss_grid]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">row</strong> : Add row from one of them<i class="angle double right icon"></i>between 1 to 15 and all row total become 16 eg : 8 + 8 = 16 </p>         
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_grid class=""][ss_col row="2"]add content here.. [/ss_col][ss_col row="14"]add content here.. [/ss_col][/ss_grid]
	            <h4 class="ui header">Output</h4>
	           <div class="ui grid "><div class="row"><div class="two wide column">add content here.. </div><div class="fourteen wide column">add content here.. </div></div></div>
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	           [ss_grid class=""][ss_col row="4"]add content here.. [/ss_col][ss_col row="4"]add content here.. [/ss_col][ss_col row="8"]add content here.. [/ss_col][/ss_grid]
	            <h4 class="ui header">Output</h4>
	           <div class="ui grid "><div class="row"><div class="four wide column">add content here.. </div><div class="four wide column">add content here.. </div><div class="eight wide column">add content here.. </div></div></div>
	          </div>
	        </div>
	        <div data-tab="third/b" class="ui bottom attached tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://www.semantic-ui.com/collections/message.html'>Message</a> Shortcode</h4>
	            <p>[ss_message attached="" class="" type=""]Add message here...[/ss_message]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">attached</strong> : Add attached from one of them<i class="angle double right icon"></i> top attached<i class="ellipsis vertical icon"></i> bottom attached<i class="ellipsis vertical icon"></i> top right attached<i class="ellipsis vertical icon"></i> top left attached<i class="ellipsis vertical icon"></i> bottom left attached<i class="ellipsis vertical icon"></i> bottom right attached</p>
	            <p><strong class="width1">type</strong> : Add type from one of them<i class="angle double right icon"></i> warning<i class="ellipsis vertical icon"></i> info<i class="ellipsis vertical icon"></i> success<i class="ellipsis vertical icon"></i> error</p>        
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4> 
	            [ss_message attached="" class="" type="error"]Add message here...[/ss_message]
	            <h4 class="ui header">Output</h4> 
	            <div class="ui message icon  error">Add message here…</div>
	          </div>
	        </div>
	        <!-- <div data-tab="third/c" class="ui bottom attached tab segment">3C</div> -->
	      </div>
	      <div data-tab="fourth" class="ui tab segment">
	        <div class="ui top attached tabular menu">
	          <a data-tab="fourth/a" class="item">Accordion</a>
	          <a data-tab="fourth/b" class="item">Tab</a>
	          <a data-tab="fourth/c" class="item">Transition</a>
	        </div>
	        <div data-tab="fourth/a" class="ui bottom attached active tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://www.semantic-ui.com/modules/accordion.html'>Accordion</a> Shortcode</h4>
	            <p>[ss_accordioan variations="" class=""]<br/>
	            [ss_item variations="" href="" title="Enter title here.." active="yes"]add content here...[/ss_item]<br/>
	            [ss_item variations="" href="" title="Enter title here.." active="no"]add content here...[/ss_item]<br/>
	            [/ss_accordioan]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">variations</strong> : Add variations from one of them<i class="angle double right icon"></i> menu<i class="ellipsis vertical icon"></i> fluid<i class="ellipsis vertical icon"></i> styled<i class="ellipsis vertical icon"></i> default is empty get horizontal style.</p>
	            <p><strong class="width1">href</strong> : Add href link of accordion item if variation is menu</p>  
	            <p><strong class="width1">title</strong> : Add title of accordion item</p>   
	            <p><strong class="width1">add content here...</strong> : Add content of accordion item</p>         
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4> 
	            [ss_accordioan variations="fluid" class=""]<br/>
	            [ss_item variations="fluid" href="" title="Enter title here.." active="yes"]add content here...[/ss_item]<br/>
	            [ss_item variations="fluid" href="" title="Enter title here.." active="no"]add content here...[/ss_item]<br/>
	            [/ss_accordioan]
	            <h4 class="ui header">Output</h4> 
	            <div class="ui styled fluid accordion "><div class="title active"> <i class="dropdown icon"></i>Enter title here..</div><div class="content active">add content here…</div><div class="title"> <i class="dropdown icon"></i>Enter title here..</div><div class="content">add content here…</div></div><script type="text/javascript">jQuery(".ui.accordion").accordion();</script>
	          </div>
	        </div>
	        <div data-tab="fourth/b" class="ui bottom attached active tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/modules/tab.html'>Tab</a> Shortcode</h4>
	            <p>[ss_tab class=""]<br/>
	               [ss_tab_title variations="" activeno="1"]Title 1,Title 2[/ss_tab_title]<br/>
	               [ss_tab_content variations="" title="Title 1" active="yes"]add content 1 here...[/ss_tab_content]<br/>
	               [ss_tab_content variations="" title="Title 2" active="no"]add content 2 here...[/ss_tab_content]<br/>
	               [/ss_tab]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">variations</strong> : Add variations from one of them<i class="angle double right icon"></i> menu<i class="ellipsis vertical icon"></i> secondary<i class="ellipsis vertical icon"></i> tabular<i class="ellipsis vertical icon"></i> default is empty get tabular style.</p>
	            <p><strong class="width1">title</strong> : Add title of tab item</p>   
	            <p><strong class="width1">add content 1 here...</strong> : Add content of tab 1 item</p>
	            <p><strong class="width1">Title 1,Title 2</strong> : Add title of tab item seperated by ,(Note: Add same title to content title)</p>                  
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	             [ss_tab class=""]<br/>
	             [ss_tab_title variations="" activeno="1"]Title 1,Title 2[/ss_tab_title]<br/>
	             [ss_tab_content variations="" title="Title 1" active="yes"]add content 1 here...[/ss_tab_content]<br/>
	             [ss_tab_content variations="" title="Title 2" active="no"]add content 2 here...[/ss_tab_content]<br/>
	             [/ss_tab]
	            <h4 class="ui header">Output</h4>
	              <div class="tab  "><div class="ui top attached tabular menu"><a class="item active" data-tab="Title1">Title 1</a><a class="item" data-tab="Title2">Title 2</a></div><div class="ui bottom attached tab segment active" data-tab="Title1">add content 1 here…</div><div class="ui bottom attached tab segment" data-tab="Title2">add content 2 here…</div></div>
	              <script type="text/javascript">jQuery(document).ready(function(){
	                jQuery('.tab .menu .item').tab({
	                    history: true,
	                    context: jQuery('.tab')
	                  });
	                });
	            </script>
	          </div>
	        </div>
	        <div data-tab="fourth/c" class="ui bottom attached active tab segment">
	          <div class="ui segment">
	            <h4 class="ui header"><a  target="_blank" href='http://semantic-ui.com/modules/transition.html'>Transition</a> Shortcode</h4>
	            <p>[ss_transition class="" animation="" direction="" action="" duration=""] Add content here... [/ss_transition]</p>
	            <h4 class="ui header">Description</h4>
	            <p><strong class="width1">class</strong> : Add custom class</p>
	            <p><strong class="width1">animation</strong> : Add animation from one of them<i class="angle double right icon"></i> Scale<i class="ellipsis vertical icon"></i> fade<i class="ellipsis vertical icon"></i> flip<i class="ellipsis vertical icon"></i> drop<i class="ellipsis vertical icon"></i> fly<i class="ellipsis vertical icon"></i> swing<i class="ellipsis vertical icon"></i> browse<i class="ellipsis vertical icon"></i> slide<i class="ellipsis vertical icon"></i> jiggle<i class="ellipsis vertical icon"></i> flash<i class="ellipsis vertical icon"></i> shake<i class="ellipsis vertical icon"></i> pulse<i class="ellipsis vertical icon"></i> tada<i class="ellipsis vertical icon"></i> bounce<i class="ellipsis vertical icon"></i> If is empty get bounce animation.</p>
	            <p><strong class="width1">direction</strong> : Add direction from one of them<i class="angle double right icon"></i> up<i class="ellipsis vertical icon"></i> down<i class="angle double right icon"></i> left<i class="angle double right icon"></i> right</p>   
	            <p><strong class="width1">action</strong> : Add action from one of them<i class="angle double right icon"></i> vertical<i class="ellipsis vertical icon"></i> horizontal</p>
	            <p><strong class="width1">duration</strong> : Add duration for transition eg :500ms for 0.5 second, 1s for 1 seocnds.. <a href="http://www.w3schools.com/cssref/css3_pr_transition-duration.asp" target="_blank">so on</a> If is empty get 1s duration</p>                  
	          </div>
	          <div class="ui segment">
	            <h4 class="ui header">Shortcode</h4>
	            [ss_transition class="" animation="" direction="" action="" duration="10s"] Add content here...please refresh page to display output [/ss_transition]
	            <h4 class="ui header">Output</h4>
	            <div class="tran_82114557"> Add content here…please refresh page to display output  </div>
	            <script type="text/javascript">jQuery(document).ready(function(){
	                jQuery('.tran_82114557').transition({
	                    animation : 'bounce  ',
	                    duration  : '10s'
	                  });
	                });
	            </script>
	        </div>
	    </div>
	  </div>
	  <script type="text/javascript">
	  jQuery(document)
	    .ready(function(){
	      jQuery('.tab.demo .menu .item')
	        .tab({
	          history: true,
	          context: jQuery('.tab.demo')
	        })
	      ;
	    })
	  ;
	</script>
	</div>
	<div class="clear"></div>
	</div>
	<?php
}
?>