<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" type="image/png" href="logos\favicon-16x16.png">
    <title>IVTREE TRAINING SCHEDULE</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="index_style.css">
    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>
<body>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>   
</div>




<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="navbar-image">
                <img class="logo_img" src="logos\ivtree_logo.png">
                
            </div>
<div class="user-panel">
        <div class="pull-left info">
          <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome, 
        <strong><?php echo $_SESSION['username']; ?></strong>
      </p>
    <?php endif ?>
        </div>
      </div>
            <ul class="list-unstyled components">
                <p>Catalog</p>
                <li class="sidebar-active">
                    <a href="#Ubuntu">Ubuntu</a>  
                </li>
                <li>
                    <a href="#Databases">Databases</a>
                </li>
                <li>
                    <a href="#Python">Python</a>                   
                </li>
                <li>
                    <a href="#Web-Servers">Web Servers</a>
                </li>
                <li>
                    <a href="#Git">Git</a>
                </li>
                <li>
                    <a href="#Devops">Devops</a>
                </li>
                <li>
                    <a href="#CentOS">CentOS</a>
                </li>
                <li>
                    <a href="#CentOS-cont">CentOS (cont.)</a>
                </li>
                <li>
                    <a href="#REST-API">REST API</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">

                <li>
                    <a href="index.php?logout='1'" class="article">Signout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <h4 align="center">IVTREE TRAINING SCHEDULE</h4>                  
                </div> 
            </nav>

            <!--TABLE-->

           <div class="table-users">
   <div class="header collapsible" id="Ubuntu">Ubuntu</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Installation on Virtual Box</td>
                            <td>Ubuntu 16.04 server version -
                                <ol> 
                                    <li>Understanding of SWAP memory</li>
                                    <li>MBR</li>
                                    <li>Grub</li>
                                    <li>Network Configuration (Bridged)</li>
                                    <li>Kernel Basics</li>
                                </ol> 
                            </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Installation on Virtual Box</td>
                        <td>Ubuntu 18.04 server version</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Network Configuration & Storage</td>
                        <td>
                            <ol>
                                <li>Learning about Static IP and its configuration.</li>
                                <li>Learning about Dynamic IP and its configuration.</li>
                                <li>Extending the Storage Space</li></ol>
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Basic Operations</td>
                        <td>Learning Ubuntu basic commands and trying them out</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 1 Day</span></tr>
                </table><br></div>
</div>

            <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="Databases">Databases</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Installation</td>
                        <td>Installing MySQL in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Basic operations</td>
                        <td> Learning basic database operations -
                            <ol>
                                <li>Select queries</li>
                                <li>Add, Insert queries</li>
                                <li>Drop queries</li>
                                <li>SQL functions : max(), min(), count(), avg(), sum() </li>
                                <li>SQL constraints</li>
                                <li>SQL join concepts </li>
                                <li>creation, modification and removing databases</li>
                            </ol>
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Installation on Virtual Box</td>
                        <td>Installing phpMyAdmin and performing basic database operations</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Installation</td>
                        <td>Installing Cassandra in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Basic operations</td>
                        <td>Learning basic database operations</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 2 Days</span></tr>
            </table><br></div>
        </div>

            <div class="line"></div>

             <div class="table-users">
   <div class="header collapsible" id="Python">Python</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
        
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation</td>
                        <td>Installing Python-2.7 in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Installation</td>
                        <td> Installing Python-3 in Ubuntu server 16.04/18.04 </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Installation</td>
                        <td>Installing pip using <a href="https://bootstrap.pypa.io/get-pip.py">get-pip.py</a> on Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>4.</td>
                        <td>Installation</td>
                        <td>Installing basic pip modules in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>5.</td>
                        <td>Basic operations</td>
                        <td>Execution of basic python execution programs from <a href="https://www.hackerearth.com/"> HackerEarth </a></td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 2 Days</span></tr>
            </table><br></div>
        </div>

            <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="Web-Servers">Web Servers - Apache & Nginx</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation</td>
                        <td>Installing Apache2 in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Execution</td>
                        <td>Hosting a simple web page via Apache in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Installation</td>
                        <td>Installing Nginx in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>4.</td>
                        <td>Execution</td>
                        <td>Hosting a simple web page via Nginx in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>5.</td>
                        <td>Basics of .conf files</td>
                        <td>Learn about the contents of configuration files, server, local blocks of Nginx and Virtualhost concepts of Apache</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr> 
                        <tr><span>Total Duration : 1 Day</span></tr>
                    </tr>
            </table><br></div>
        </div>
    
    <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="Git">Git</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation</td>
                        <td>Installing Git in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Basic operations</td>
                        <td> Learning basic git operations -
                            <ol>
                                <li>git configurations</li>
                                <li>creating a repository</li>
                                <li>staging files to local git repository</li>
                                <li>commit git files to a repository</li>
                                <li>git-pull, git-push from and to repositories</li>
                                <li>basic git branching techniques</li>
                            </ol>
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Execution</td>
                        <td>
                            <ol>
                                <li>Create a GitHub account and performing basic 
                                git operations from that account</li>
                                <li>Create a GitLab account and performing basic 
                                git operations from that account in GUI.</li>
                            </ol> 
                        </td> 
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 1 Day</span></tr>
            </table><br></div>
    </div>

    <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="Devops">Devops</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation on Virtual Box</td>
                        <td>Install Jenkins in Ubuntu server 16.04/18.04</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>       
                    <tr>
                      <td>2.</td>
                        <td>Execution</td>
                        <td>Running a simple job (freestyle project) in Jenkins using inbuilt Jenkins workspace</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                    
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Execution</td>
                        <td>Running a simple job (freestyle project) in Jenkins using Git</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>4.</td>
                        <td>Installation</td>
                        <td>Install basic plugins in Jenkins</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>5.</td>
                        <td>Execution</td>
                        <td>Learn e-mail configuration and run a job with e-mail settings</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>6.</td>
                        <td>Configuration</td>
                        <td>Learn e-mail configuration and run a job with e-mail settings</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>7.</td>
                        <td>Installation</td>
                        <td>Install Testlink and create a project</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>8.</td>
                        <td>Configuration</td>
                        <td>Learn to configure -
                            <ol> 
                                <li>Test project</li>
                                <li>Test plan</li>
                                <li>Test suites</li>
                                <li>Test cases</li>
                            </ol> 
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>9.</td>
                        <td>Execution</td>
                        <td>Execute some basic test cases</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 4 Days</span></tr>
            </table><br></div>
    </div>

    <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="CentOS">CentOS</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation</td>
                        <td>Install CentOS 6.9 server version</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Installation</td>
                        <td> Install CentOS 7 server version</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Basic commands</td>
                        <td>Learn the basic commands and try out basic CentOS operations</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>4.</td>
                        <td>Network configuration</td>
                        <td>For the installed CentOS,
                            <ol>
                                <li>Configure Static IP</li>
                                <li>Configure Dynamic IP</li>
                            </ol>
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr><span>Total Duration : 1 Day</span></tr>
            </table><br></div>
    </div>

    <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="CentOS-cont">CentOS (cont.)</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Installation</td>
                        <td>Installing MySQL, phpMyAdmin in CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Basic operations</td>
                        <td> Perform basic database operations on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>3.</td>
                        <td>Installation</td>
                        <td>Installing python-2.7 and python-3 on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>4.</td>
                        <td>Installation</td>
                        <td>Installing pip using <a href="https://bootstrap.pypa.io/get-pip.py">get-pip.py</a> in CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>5.</td>
                        <td>Execution</td>
                        <td>Execution of basic python programs on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    <tr>
                      <td>6.</td>
                        <td>Installation</td>
                        <td>Install httpd(Apache) on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>7.</td>
                        <td>Execution</td>
                        <td>Host a simple web page via httpd (Apache) on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>8.</td>
                        <td>Installation</td>
                        <td>Install Git on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>9.</td>
                        <td>Basic operations</td>
                        <td>Execute some basic git operations on CentOS server 6.9/7</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr> 
                    <tr><span>Total Duration : 3 Days</span></tr>
            </table><br></div>
    </div> 

    <div class="line"></div>

            <div class="table-users">
   <div class="header collapsible" id="REST-API">REST API</div>
   <div class="content">
   <table cellspacing="0">
      <tr>
                        <th>Sl. no.</th>
                        <th>Tasks</th>
                        <th>Description</th>
                        
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                        <td>Introduction</td>
                        <td>Learn about REST API's and their importance</td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr>
                    <tr>
                      <td>2.</td>
                        <td>Operations</td>
                        <td>Perform some basic operations in -
                            <ol>
                                <li>JSON : Learning the basics of JSON</li>
                                <li>Get GitHub commits and issues using REST API for GitHub</li>
                            </ol>
                        </td>
                        <td><!-- Switch -->
                           <label class="switch"><input type="checkbox" id="togBtn"><div class="slider round"><!--ADDED HTML --><span class="on">Done</span><span class="off">New</span><!--END--></div></label>
                        </td>
                        <td><form method="post" action="#">
                <textarea id="txtcomment" rows="3" name="comment"></textarea>
                <input type="submit" value="submit">
              </form></td>
                        
                    </tr> 
                    <tr><span>Total Duration : 1 Day</span></tr>
            </table><br></div>
    </div>


        </div> 
    </div>
    <footer>Copyright &copy; IVTREE</footer>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        //sidebar
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
        //table-collapsible
        var coll = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                } 
            });
        }
       
    </script>

		
</body>
</html>