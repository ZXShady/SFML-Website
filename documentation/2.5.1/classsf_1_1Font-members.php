<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Font.php">Font</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::Font Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1Font.php">sf::Font</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a506404655b8869ed60d1e7709812f583">Font</a>()</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a72d7322b355ee2f1be4500f530e98081">Font</a>(const Font &amp;copy)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a308876e51e75bb69844fa3926a214fbf">getGlyph</a>(Uint32 codePoint, unsigned int characterSize, bool bold, float outlineThickness=0) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a7f33b30315f6ce8d8b4acfdabba065f7">getInfo</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a5e1d5aca772d4765ce940670c2f786a6">getKerning</a>(Uint32 first, Uint32 second, unsigned int characterSize) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a4538cc8af337393208a87675fe1c3e59">getLineSpacing</a>(unsigned int characterSize) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a15528d289f91cfd4b2597f8a9423e612">getTexture</a>(unsigned int characterSize) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a726a55f40c19ac108e348b103190caad">getUnderlinePosition</a>(unsigned int characterSize) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#ad6d0a5bc6c026fe85c239f1f822b54e6">getUnderlineThickness</a>(unsigned int characterSize) const</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1">loadFromFile</a>(const std::string &amp;filename)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#abf2f8d6de31eb4e1db02e061c323e346">loadFromMemory</a>(const void *data, std::size_t sizeInBytes)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#abc3f37a354ce8b9a21f8eb93bd9fdafb">loadFromStream</a>(InputStream &amp;stream)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a232515549846e3172a514d0b47918399">operator=</a>(const Font &amp;right)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#aa18a3c62e6e01e9a21c531b5cad4b7f2">~Font</a>()</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>