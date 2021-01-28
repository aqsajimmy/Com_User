<html>
<style type="text/css">
	a:hover {text-decoration: none;}
	li {display: inline;}
</style>
<ul>
<li><a href="./comex.php">Com_User Exploiter</a></li></ul>
<hr color=red>
</html>
 <?php
        @set_time_limit(0);
        echo "<form method='POST'>
        <style>
        html {
        	font-family:arial;
        	background-color:#00a885;
        }
        input
        {
                color: #0078AA;
                border: dotted 1pt #0078AA;
        }
        </style>
        <title>Com_User Scanner</title>
        <body>
        <p align='center' dir='ltr'><b><br>
        <font face='arial' size='7' color='#0078AA'>0</font><font face='arial' size='5'>xforbidd3n</font><font face='arial' size='7'>
        <font color='#0078AA'>S</font></font><font face='arial' size='5'>canner</font><font face='arial' size='7'>
        <font color='#0078AA'>E</font></font><font face='arial' size='5'>xploiter</font></b></p>
        <center>
        <p>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        http://<br>
        </p>
        <textarea name='sites' cols='50' rows='10'></textarea><br>
        <input type='submit' name='scan' value=' Scann!!! '><br>
        </form>";
       
        if($_POST['scan'])
                {
        $site = explode("\r\n",$_POST['sites']);
        foreach($site as $sites)
        {
                $curl = curl_init("{$sites}/index.php?option=com_users&view=registration");
                curl_setopt($curl, CURLOPT_FAILONERROR, true);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($curl);
                        if(eregi("jform_email2-lbl",$result))
                        {
                                echo "<font face='Comic Sans MS'>
                                <a href='{$sites}/index.php?option=com_users&view=registration' style='text-decoration: none'>{$sites}</a>
                                <font color='green'>Vuln</font></font><br>";
                        }
                        else
                        {
                                echo "<font face='Comic Sans MS'>{$sites}
                                <font color='red'>Tidak</font></font><br>";
                        }
        }
                }
        echo "<p dir='ltr' align='center'><font face='Consolas' size='2'>Coded By : <font color='#blue'>FORBIDD3N</font><br>
        <br>
        </font></p>
</body>";
?> 