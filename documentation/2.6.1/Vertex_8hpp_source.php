<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vertex.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="topics.php"><span>Topics</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(document).ready(function() { init_codefold(0); });
/* @license-end */
</script>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Vertex.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_VERTEX_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_VERTEX_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Graphics/Color.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span> </div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span>{</div>
<div class="foldopen" id="foldopen00042" data-start="{" data-end="};">
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php">   42</a></span><span class="keyword">class </span>SFML_GRAPHICS_API <a class="code hl_class" href="classsf_1_1Vertex.php">Vertex</a></div>
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno">   43</span>{</div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno">   45</span> </div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a6b4c79cd69f7ec1296fede536f39e9c8">   50</a></span>    <a class="code hl_function" href="classsf_1_1Vertex.php#a6b4c79cd69f7ec1296fede536f39e9c8">Vertex</a>();</div>
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno">   51</span> </div>
<div class="line"><a id="l00060" name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a4dccc5c351b73b6fac169fe442535b40">   60</a></span>    <a class="code hl_function" href="classsf_1_1Vertex.php#a4dccc5c351b73b6fac169fe442535b40">Vertex</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition);</div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno">   61</span> </div>
<div class="line"><a id="l00071" name="l00071"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a70b0679b4ec531d5bd1a7d0225c7321a">   71</a></span>    <a class="code hl_function" href="classsf_1_1Vertex.php#a70b0679b4ec531d5bd1a7d0225c7321a">Vertex</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Color.php">Color</a>&amp; theColor);</div>
<div class="line"><a id="l00072" name="l00072"></a><span class="lineno">   72</span> </div>
<div class="line"><a id="l00082" name="l00082"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#ab9bf849c4c0d82d09bf5bece23d2456a">   82</a></span>    <a class="code hl_function" href="classsf_1_1Vertex.php#ab9bf849c4c0d82d09bf5bece23d2456a">Vertex</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; theTexCoords);</div>
<div class="line"><a id="l00083" name="l00083"></a><span class="lineno">   83</span> </div>
<div class="line"><a id="l00092" name="l00092"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#ad5943f2b3cbc64b6e714bb37ccaf4960">   92</a></span>    <a class="code hl_function" href="classsf_1_1Vertex.php#ad5943f2b3cbc64b6e714bb37ccaf4960">Vertex</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Color.php">Color</a>&amp; theColor, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; theTexCoords);</div>
<div class="line"><a id="l00093" name="l00093"></a><span class="lineno">   93</span> </div>
<div class="line"><a id="l00095" name="l00095"></a><span class="lineno">   95</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00097" name="l00097"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">   97</a></span>    <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>  <a class="code hl_variable" href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">position</a>;  </div>
<div class="line"><a id="l00098" name="l00098"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">   98</a></span>    <a class="code hl_class" href="classsf_1_1Color.php">Color</a>     <a class="code hl_variable" href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">color</a>;     </div>
<div class="line"><a id="l00099" name="l00099"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">   99</a></span>    <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>  <a class="code hl_variable" href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">texCoords</a>; </div>
<div class="line"><a id="l00100" name="l00100"></a><span class="lineno">  100</span>};</div>
</div>
<div class="line"><a id="l00101" name="l00101"></a><span class="lineno">  101</span> </div>
<div class="line"><a id="l00102" name="l00102"></a><span class="lineno">  102</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00103" name="l00103"></a><span class="lineno">  103</span> </div>
<div class="line"><a id="l00104" name="l00104"></a><span class="lineno">  104</span> </div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno">  105</span><span class="preprocessor">#endif </span><span class="comment">// SFML_VERTEX_HPP</span></div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span> </div>
<div class="line"><a id="l00107" name="l00107"></a><span class="lineno">  107</span> </div>
<div class="ttc" id="aclasssf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors.</div><div class="ttdef"><b>Definition</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:41</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates.</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:43</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a4dccc5c351b73b6fac169fe442535b40"><div class="ttname"><a href="classsf_1_1Vertex.php#a4dccc5c351b73b6fac169fe442535b40">sf::Vertex::Vertex</a></div><div class="ttdeci">Vertex(const Vector2f &amp;thePosition)</div><div class="ttdoc">Construct the vertex from its position.</div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a6b4c79cd69f7ec1296fede536f39e9c8"><div class="ttname"><a href="classsf_1_1Vertex.php#a6b4c79cd69f7ec1296fede536f39e9c8">sf::Vertex::Vertex</a></div><div class="ttdeci">Vertex()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a70b0679b4ec531d5bd1a7d0225c7321a"><div class="ttname"><a href="classsf_1_1Vertex.php#a70b0679b4ec531d5bd1a7d0225c7321a">sf::Vertex::Vertex</a></div><div class="ttdeci">Vertex(const Vector2f &amp;thePosition, const Color &amp;theColor)</div><div class="ttdoc">Construct the vertex from its position and color.</div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a799faa0629442e90f07cd2edb568ff80"><div class="ttname"><a href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">sf::Vertex::color</a></div><div class="ttdeci">Color color</div><div class="ttdoc">Color of the vertex.</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00098">Vertex.hpp:98</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a8a4e0f4dfa7f1eb215c92e93d04f0ac0"><div class="ttname"><a href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">sf::Vertex::position</a></div><div class="ttdeci">Vector2f position</div><div class="ttdoc">2D position of the vertex</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00097">Vertex.hpp:97</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_a9e79bd05818d36c4789751908037097c"><div class="ttname"><a href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">sf::Vertex::texCoords</a></div><div class="ttdeci">Vector2f texCoords</div><div class="ttdoc">Coordinates of the texture's pixel to map to the vertex.</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00099">Vertex.hpp:99</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_ab9bf849c4c0d82d09bf5bece23d2456a"><div class="ttname"><a href="classsf_1_1Vertex.php#ab9bf849c4c0d82d09bf5bece23d2456a">sf::Vertex::Vertex</a></div><div class="ttdeci">Vertex(const Vector2f &amp;thePosition, const Vector2f &amp;theTexCoords)</div><div class="ttdoc">Construct the vertex from its position and texture coordinates.</div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php_ad5943f2b3cbc64b6e714bb37ccaf4960"><div class="ttname"><a href="classsf_1_1Vertex.php#ad5943f2b3cbc64b6e714bb37ccaf4960">sf::Vertex::Vertex</a></div><div class="ttdeci">Vertex(const Vector2f &amp;thePosition, const Color &amp;theColor, const Vector2f &amp;theTexCoords)</div><div class="ttdoc">Construct the vertex from its position, color and texture coordinates.</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>