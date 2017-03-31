<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>Carrera</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
<div id="wrap">
  <div id="content-container">
    <div id="header">
      <div id="navlist-container">
        <div id="navlist">
          <ul>
            <li ><a href="index.html">Home</a></li>
            <li><a href="kontsultatu.php">Kontsulta</a></li>
            <li><a href="Erregistratu.php">Erregistratu</a></li>
            <li class="current_page_item"><a href="#">Ezabatu</a></li>
          </ul>
        </div>
      </div>
      <h1><a href="#">Carrera</a></h1>
      <div id="subtitle">Free CSS Template</div>
      <div class="alignleft"> </div>
      <div id="menu_search_box">
        <form method="get" id="searchform" style="display:inline;" href="#">
          <span class="searchttl">Search:&nbsp;</span>
          <input type="text" class="s" value="" name="s" id="s" />
          &nbsp;
        </form>
      </div>
    </div>
    <div id="aboutus"> <b>About us</b> <br />
      Duiet laculum fring non anterdum vestas elit ac dolor elit convallicituris. Auguemus vestibulum temper vestibulum sodalesuada vitae nibh molesuada aenean sit pretra. Metuerleo ipsum liberos euisque tellus portis ut pede semper odio tor. Ideuis habiturpiscingillam gravida convallis tor vel moles morbi vitae mollis wisi.<br />
      <a href="#">more...</a></div>
    <div  id="content">
      <div class="post-container">
        <div class="post" id="post-3">
          <div class="posttop">
            <h2><a href="#"> Delete a car </a></h2>
          </div>
          <div class="entry">
            <div class="content">
              <?php
                include("test_conect_db.php");
                $link=conectDataBase(); #We are calling the function
                $result=mysqli_query($link, "select * from cars;");


              ?>
              <table border="1" class="tabla">
                <tr>
                  <th>Chassis number</th><th>Brand</th><th>Model</th><th>Year</th><th>Color</th>
                </tr>
                <?php
                  while ($erregistroa=mysqli_fetch_array($result)) {
                    # code...
                    printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td><td><a href=\"delete_cars.php?chassis_number=%s\"><Img src=\"delete.jpg\" width=\"30px\" heigth=\"30px\"></a></td></tr>", $erregistroa["chassis_number"], $erregistroa["brand"], $erregistroa["model"], $erregistroa["year"], $erregistroa["color"],$erregistroa["chassis_number"]);
                  }
                  mysqli_free_result($result);
                  mysqli_close($link);
                 ?>


              </table>
            </div>
          </div>
          <div class="postbottom">
          </div>
        </div>
      </div>
      <div id="sidebars-area">
        <div id="sidebars">
          <div id="sidebar">
            <ul>
              <li id="categories-187785351" class="widget widget_categories">
                <h2 class="widgettitle">Categories</h2>
                <ul>
                  <li><a href="#">Templates</a> </li>
                  <li><a href="#">Wallpapers</a> </li>
                </ul>
              </li>
              <li id="archives" class="widget widget_archive">
                <h2 class="widgettitle">Archives</h2>
                <ul>
                  <li><a href="#">July 2008</a></li>
                </ul>
              </li>
              <li id="calendar" class="widget widget_calendar">
                <h2 class="widgettitle">&nbsp;</h2>
                <div id="calendar_wrap">
                  <table id="wp-calendar" summary="Calendar">
                    <caption>
                    October 2008
                    </caption>
                    <thead>
                      <tr>
                        <th scope="col" title="Monday">M</th>
                        <th scope="col" title="Tuesday">T</th>
                        <th scope="col" title="Wednesday">W</th>
                        <th scope="col" title="Thursday">T</th>
                        <th scope="col" title="Friday">F</th>
                        <th scope="col" title="Saturday">S</th>
                        <th scope="col" title="Sunday">S</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <td abbr="July" colspan="3" id="prev"><a href="#">&laquo; Jul</a></td>
                        <td class="pad">&nbsp;</td>
                        <td colspan="3" id="next" class="pad">&nbsp;</td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td colspan="2" class="pad">&nbsp;</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                      </tr>
                      <tr>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td id="today">20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td class="pad" colspan="2">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
            </ul>
          </div>
          <div id="sidebar2">
            <ul>
              <li>
                <h2>Archives</h2>
                <ul>
                  <li><a href="#">July 2008</a></li>
                </ul>
              </li>
              <li>
                <h2>Categories</h2>
                <ul>
                  <li><a href="#">Templates</a> (1) </li>
                  <li><a href="#">Wallpapers</a> (1) </li>
                </ul>
              </li>
              <li class="linkcat">
                <h2>Blogroll</h2>
                <ul>
                  <li><a href="#">Development Blog</a></li>
                  <li><a href="#">Documentation</a></li>
                  <li><a href="#">Plugins</a></li>
                  <li><a href="#">Suggest Ideas</a></li>
                  <li><a href="#">Support Forum</a></li>
                  <li><a href="#">Themes</a></li>
                </ul>
              </li>
              <li>
                <h2>Meta</h2>
                <ul>
                  <li><a href="#">Log in</a></li>
                  <li><a href="http://validator.w3.org/check/referer">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                  <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="footerlinks"> Designed by: <a href="http://www.hostsvault.com">HostsVault.com</a> the leader in <a href="http://www.hostsvault.com">Cheap Hosting</a> solutions. </div>
    </div>
  </div>
</div>
</body>
</html>
