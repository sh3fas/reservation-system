<br><br><br>
        <style>
                    html,body {
                      margin:0;
                       padding:0;
                       height:100%;
                    }

                    .list table {
                       width: 915px;
                       border-top: 1px solid black;
                       border-right: 1px solid black;
                       border-left: 1px solid black;
                       border-bottom: 1px solid black;
                       margin: auto auto;
                    }

                    #filter {
                        padding-top: 5px;
                        padding-bottom: 5px;
                        padding-left: 20px;
                        background-color: silver;
                        font-family: verdana;
                        border-bottom: none;
                    }
            
                    #filter input, select {
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        width: 100px;
                    }
            
                    label {
                        padding-left: 10px;
                        padding-right: 20px;
                    }
            
                    select {
                        width: 130px;
                    }
            
                    #nuo {
                        width: 150px;
                    }

                    #iki {
                        width: 150px;
                    }

                    .content-list {
                       min-height: 520px;
                       width: 900px;
                       font-family: verdana;
                       margin: auto auto;
                    }
                    
                    .content-list input {
                        float: right;
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        width: 300px;
                    }
                    
                    #button {
                        border: none;
                        color: white;
                        font-family: verdana;
                        font-size: 14px;
                        background-color: #3b8dcc;
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        width: 100px;
                        height: 33px;
                    }
 
                    .user {
                        padding-left: 20px;
                        margin: 10px;
                        font-size: 15px;
                    }
            
                    .user button {
                        border: none;
                        float: right;
                        color: white;
                        font-family: verdana;
                        background-color: #3b8dcc;
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 6px;
                        height: 20px;
                        
                    }
            
                    .auto {
                        font-size: 17px;
                    }
                        
                
                    .footer {
                          margin: auto auto;
                          right: 0;
                          bottom: 0;
                          left: 0;
                          padding: 1rem;
                          background-color: silver;
                          text-align: center;
                          height: 15px;
                          width: 883px;
                          font-family: verdana;
                    }
                    
            
        </style>
        <div class="list">
            <table id="filter">
                <tr>
                    <td>
                        <label>Markė:
                           <select name="marke" required id="selektas">
                               <option>- select option -</option>
                            <?php echo form_open('ordered/index'); ?>
                                        <?php
                                            foreach ($get_auto as $a):
                                        echo "<option value=\"".$a['aid']."\">".$a['aid'].". ".$a['marke']." ";
                                        echo "<br>";
                                        ?>
                            <?php endforeach; ?> 
                            </select>
                            </label>
                            <label>Modelis:
                                <select name="modelis" required id="selektas">
                                    <option>- select option -</option>
                            <?php echo form_open('ordered/index'); ?>
                                        <?php
                                            foreach ($get_auto as $a):
                                        echo "<option value=\"".$a['aid']."\">".$a['modelis']." ";
                                        echo "<br>";
                                        ?>
                            <?php endforeach; ?> 
                            </select>
                            </label>
                            <label>Vartotojas:
                                <select name="vardas" required id="selektas"> 
                                          <option>- select option -</option>    
                                   <?php echo form_open('bookcar/bookcar'); ?>
                                        <?php
                                            foreach ($get_user as $a):
                                        echo "<option value=\"".$a['vid']."\">".$a['vid'].". ".$a['vardas']." ".$a['pavarde']." ".$a['telefonas']." ".$a['epastas']." ";
                                        echo "<br>";
                                        ?>
                                    <?php endforeach; ?>   
                                 </select>       
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                       <label>Periodas:
                            <label for="nuo">Nuo:
                                <input id="nuo" name="nuo" type="datetime-local" required placeholder="2017-12-05 14:00:00" value="">
                            </label>
                            <label for="iki">Iki:
                                <input id="iki" name="iki" type="datetime-local" required placeholder="2017-12-30 21:00:00" value="" />
                            </label>
                        </label>
                        <input id="button" type="submit" name="submit" value="Filtruoti" >
                    </td>
                </tr>
            </table>
        </div>
        <div class="list">
            <table>
                <tr>
                    <td>
                      <br>
                       <div class="content-list">
                        
                        <?php foreach ($sujungimas as $news_item): ?>
                                <div class="main">

                                        <div class="auto">
                                             <?php echo $news_item['marke']; ?>
                                             <?php echo $news_item['modelis'].", "; ?>
                                             <?php echo $news_item['metai'].", "; ?>
                                             <?php echo $news_item['kuras'].", "; ?>
                                             <?php echo $news_item['numeris']."</br>"; ?>
                                        </div>

                                        <div class="user">
                                             <?php echo $news_item['nuo']." - "; ?>
                                             <?php echo $news_item['iki']." ( "; ?>
                                             <?php echo $news_item['vardas']; ?>
                                             <?php echo $news_item['pavarde'].", "; ?>
                                             <?php echo $news_item['epastas'].") "; ?>
                                             <button onclick="window.location.href='<?php echo site_url('ordered/delete_row/'.$news_item['rid']);  ?>'">Atšaukti rezervavimą</button>
                                             <!--
                                             <button action="ordered.php" method="post" id="forma1">
                                                <input type="hidden" name="par2" value="'.$news_item['rid'].'">
                                                <a href="<?php /* php echo site_url('ordered/delete_row/'.$news_item['rid']); */ ?>" style="padding: 0">Atšaukti rezervavimą</a>
                                            </button>
                                            -->
                                         </div>
                                         <br>
                                </div>
                        <?php endforeach; ?>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
            <div class="footer">
                 Automobilių nuomos sistemos sukurta: Kristijanas Kiseliovas
            </div>